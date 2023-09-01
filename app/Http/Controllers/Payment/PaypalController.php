<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    protected $provider;
    protected $token;

    public function __construct()
    {
        $this->provider = new PayPalClient;
        $this->provider->setApiCredentials(config('paypal'));
        $this->token = $this->provider->getAccessToken();
    }
    public function handlePayment(Request $request)
    {
        $booking  = Booking::findOrFail($request->get('booking_id'));
        $data = [
            "intent" => "CAPTURE",
            "application_context" => [
                "payment_method" => [
                    "payer_selected" => "PAYPAL",
                    "payee_preferred" => "IMMEDIATE_PAYMENT_REQUIRED",
                ],
                "return_url" => route('paypal.successPayment'),
                "cancel_url" => route('paypal.cancelPayment')
            ],
            "purchase_units" => [
              [
                "amount" => [
                    "currency_code" => "USD",
                    "value" => $booking->total_price
                ],
                "invoice_id" => $booking->id,
              ]
            ],
            
        ];
        
        $response = $this->provider->createOrder($data);
        // dd($response);
        if(isset($response['id']) && $response['id'] != null){
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
        }else{
            return redirect()->route('paypal.cancelPayment')->with('error',$response['error']['message']);
        }
    }


    public function successPayment(Request $request)
    {
        $response = $this->provider->capturePaymentOrder($request['token']);
       // dump($response);
       if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $bookingId = $response['purchase_units'][0]['payments']['captures'][0]['invoice_id'];
            $data = Booking::findOrFail($bookingId);
            $data->update([
                'payment_status' => 'paid',
                'payment_method' => 'paypal',
                'review_comment' => $response['id']
            ]);
            return redirect()->route('booking')
                ->with('success', 'Transaction complete.');
        }else{
            return redirect()->route('paypal.cancelPayment')->with('error',$response['message']);
        }
    }

    public function cancelPayment()
    {
        return redirect()->route('booking')->with('error','Payment Transaction Failed');
    }
}
