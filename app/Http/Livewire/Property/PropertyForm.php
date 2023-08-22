<?php

namespace App\Http\Livewire\Property;

use App\Models\City;
use App\Models\Property;
use Livewire\Component;

class PropertyForm extends Component
{
    public Property $property;

    public bool $isEdit = false;
    public array $arrayData = [];

    protected $rules = [
        'property.name' => 'required|string',
        'property.city_id' => 'required|exists:cities,id',
        'property.address_street' => 'required|string',
        'property.address_postcode' => 'nullable|string',
    ];

    public function mount(Property $property){
        $this->property = $property;
        $this->arrayDataList();
        if($this->property->exists){
            $this->isEdit = true;
        }
    }

    public function arrayDataList(){
        $this->arrayData['cities'] = City::get()->toArray();
    }
    public function render()
    {
        return view('livewire.property.form');
    }

    public function submit(){
        $this->validate();
        $this->property->save();
        return redirect()->route('properties.index');
    }
}
