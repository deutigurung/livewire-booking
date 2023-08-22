<?php

namespace App\Http\Livewire\Apartment;

use App\Models\Apartment;
use App\Models\ApartmentType;
use App\Models\Property;
use Livewire\Component;

class ApartmentForm extends Component
{
    public Apartment $apartment;

    public bool $isUpdate = false;

    public array $data = [];

    protected $rules = [
        'apartment.property_id' => 'required|exists:properties,id',
        'apartment.apartment_type_id' => 'nullable|exists:apartment_types,id',
        'apartment.name' => 'required|string',
        'apartment.capacity_adults' => 'required|integer',
        'apartment.capacity_children' => 'required|integer',
    ];
    public function mount(Apartment $apartment)
    {
        $this->apartment = $apartment;
        $this->data['properties'] = Property::get();
        $this->data['types'] = ApartmentType::get();
        if($this->apartment->exists){
            $this->isUpdate = true;
        }
    }
    public function render()
    {
        return view('livewire.apartment.form');
    }

    public function submit(){
        $this->validate();
        $this->apartment->save();
        return redirect()->route('apartments.index');
    }
}
