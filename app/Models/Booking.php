<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['apartment_id','user_id','start_date','end_date','guest_adults','guest_children',
        'total_price', 'rating', 'review_comment','payment_status','payment_method'];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
}
