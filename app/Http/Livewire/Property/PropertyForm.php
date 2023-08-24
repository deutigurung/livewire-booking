<?php

namespace App\Http\Livewire\Property;

use App\Models\City;
use App\Models\Facility;
use App\Models\Property;
use Livewire\Component;

class PropertyForm extends Component
{
    public Property $property;
    public array $facilities = [];
    public bool $isEdit = false;
    public array $arrayData = [];

    protected $rules = [
        'property.name' => 'required|string',
        'property.city_id' => 'required|exists:cities,id',
        'property.address_street' => 'required|string',
        'property.address_postcode' => 'nullable|string',
        'facilities' => 'required|array',
        'facilities.*' => 'required',
    ];

    public function mount(Property $property){
        $this->property = $property;
        $this->arrayDataList();

        if($this->property->exists){
            $this->isEdit = true;
            $this->facilities = $property->facilities->pluck('id')->toArray();
        }
    }

    public function arrayDataList(){
        $this->arrayData['cities'] = City::get()->toArray();
        $this->arrayData['facilities'] = Facility::select('id','name')->get()->toArray();
    }

    public function render()
    {
        return view('livewire.property.form');
    }

    public function submit(){
        $this->validate();
        $this->property->save();
        //store property's facility
        $this->property->facilities()->sync($this->facilities);
        return redirect()->route('properties.index');
    }
}
