<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    protected $stripe;

    public function __construct()
    {
        $this->stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

    }
    public function handlePayment(Request $request){
        // dd($request->all());
        $booking  = Booking::findByInvoiceId($request->get('booking_id'));
        $price = $booking->total_price.'00';

        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $session = $this->stripe->checkout->sessions->create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $booking->apartment->name,
                        ],
                        'unit_amount'  => $price,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => url('payment/stripe-success/'.$booking->id).'?session_id={CHECKOUT_SESSION_ID}',
            // 'success_url' => route('stripe.successPayment',['booking'=>$booking->id]),
            'cancel_url' => route('stripe.cancelPayment'),
        ]);
        $result = [
            'sessionId' => $session['id'],
        ];
        return redirect()->away($session->url);
    }

    public function successPayment(Request $request,Booking $booking)
    {
        $session = $this->stripe->checkout->sessions->retrieve($request->get('session_id'));
        $booking->update([
            'payment_status' => 'paid',
            'payment_method' => 'stripe',
            'payment_transaction' => $session->payment_intent
        ]);
        return redirect()->route('booking')->with('success', 'Transaction complete.');
        
    }

    public function cancelPayment()
    {
        return redirect()->route('booking')->with('error','Payment Transaction Failed');
    }
}
