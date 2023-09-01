<?php

namespace App\Models;

use App\Traits\ValidForRange;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory , ValidForRange;

    protected $fillable = ['apartment_id','user_id','start_date','end_date','guest_adults','guest_children',
        'total_price', 'rating', 'review_comment','payment_status','payment_method','invoice_id','payment_transaction'];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    protected static function booted(): void
    {
        static::creating(function(Booking $booking){
            $booking->invoice_id = 'P'.random_int(1000,9000);
            $booking->total_price = $booking->apartment->calculatePriceForDates(
                $booking->start_date,$booking->end_date
            );
        });
    }

    public static function findByInvoiceId($id)
    {
        return Booking::where('invoice_id',$id)->first();
    }
    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
