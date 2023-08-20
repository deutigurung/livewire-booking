<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;

class CityForm extends Component
{
    public City $city;

    public bool $edit = false;

    public array $countries = [];

    public function mount(City $city){
        $this->city = $city;
        $this->countries = Country::get()->toArray();

        if($this->city->exists){
            $this->edit = true;
        }
    }

    public function render()
    {
        $countries = Country::get()->pluck('name','id');
        return view('livewire.city.form',compact('countries'));
    }

    protected $rules = [
        'city.country_id' => 'required|exists:countries,id',
        'city.name' => 'required|string'
    ];

    protected $messages = [
        'city.country_id.required' => 'Country is required'
    ];

    public function submit()
    {
        $this->validate();
        $this->city->save();
        return redirect()->route('cities.index');

    }
}
