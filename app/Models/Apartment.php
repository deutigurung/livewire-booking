<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Apartment extends Model
{
    use HasFactory;
    protected $fillable = ['apartment_type_id','property_id', 'name', 'capacity_adults', 'capacity_children','size','bathrooms'];

    protected function capacity() : Attribute{
        return Attribute::make(
            get: fn() => 'Adults: '.$this->capacity_adults .', Children: '.$this->capacity_children
        );
    }
    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function apartment_type()
    {
        return $this->belongsTo(ApartmentType::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class,'apartment_facility');
    }

    public function apartment_prices()
    {
        return $this->hasMany(ApartmentPrice::class,'apartment_id');
    }

    public function calculatePriceForDates($startDate = null,$endDate = null)
    {
        $cost = 0; 

        //startOfDay Resets time to 00:00:00 start of day
        //endOfDay Resets time to 23:59:59 end of day
        if($startDate == null){
            $startDate = Carbon::today();
        }
        if($endDate == null){
            $endDate = Carbon::today()->addDay();
        }
        $startDate = Carbon::parse($startDate)->startOfDay();
        $endDate = Carbon::parse($endDate)->endOfDay();
        //startDate is less than or equal to endDate
        //for eg. apartment price for 2023-08-01 to 2023-08-10 is $100
        // and 2023-08-11 to 2023-08-20 is $150
        while($startDate->lte($endDate)){
            $cost += $this->apartment_prices->where(function(ApartmentPrice $price) use( $startDate){
                //return value of price by checking if reservation date is less than ApartmentPrice start_date 
                // and greater than ApartmentPrice end_date
                return $price->start_date->lte($startDate) && $price->end_date->gte($startDate);
            })->value('price');
            $startDate->addDay();
        }
        return $cost;
    }
}
