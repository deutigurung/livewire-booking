<?php

namespace App\Http\Livewire\Country;

use App\Models\Country;
use Livewire\Component;

class CountryList extends Component
{
    public function render()
    {
        $countries = Country::all();
        return view('livewire.country.list',compact('countries'));
    }
}
