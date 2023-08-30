<?php

namespace App\Rules;

use App\Models\Apartment;
use App\Models\Booking;
use Closure;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\ValidationRule;

class AvailableApartmentRule implements DataAwareRule,ValidationRule
{
    protected $data = [];
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
       $apartment = Apartment::findOrFail($value);
       if(!$apartment){
            $fail('Apartment not found');
       }

       if($apartment->capacity_adults < $this->data['guest_adults'] || 
        $apartment->capacity_children < $this->data['guest_children']){
            $fail('This apartment does not fit all your requirements');
       }
       if(Booking::where('apartment_id',$apartment->id)
            ->validForRange([$this->data['start_date'], $this->data['end_date']])->exists()){
            $fail('Sorry, this apartment is not available for those dates');
       }
    }

    //call automatically by laravel before validation proceeds
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }
}
