<?php

namespace App\Http\Livewire\Country;

use App\Models\Country;
use Livewire\Component;

class Form extends Component
{
    public $name;

    public Country $country;

    protected $rules = [
        'country.name' => 'required|string'
    ];

    public function mount(Country $country){
        $this->country = $country;
    }
    public function render()
    {
        return view('livewire.country.form');
    }

    public function submit(){
        $this->validate();
        $this->country->save();
        return redirect()->route('country.index');
    }
}
