<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
