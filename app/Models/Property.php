<?php

namespace App\Models;

use App\Support\Address;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id','name', 'city_id', 'address_street', 'address_postcode',
    ];

    protected static function boot(){
        parent::boot();
        if(auth()->check()){
            static::creating(function($property){
                $property->owner_id = auth()->id();
            });
        }
    }

    protected function address(): Attribute{
        return Attribute::make(
            get: fn() => 
                $this->address_street.','.$this->address_postcode.','.$this->city->name,
        );
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'owner_id');
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class,'property_facility');
    }

}
