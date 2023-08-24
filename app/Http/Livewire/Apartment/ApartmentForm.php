<?php

namespace App\Http\Livewire\Apartment;

use App\Models\Apartment;
use App\Models\ApartmentType;
use App\Models\Facility;
use App\Models\Property;
use Livewire\Component;

class ApartmentForm extends Component
{
    public Apartment $apartment;
    public bool $isUpdate = false;
    public array $facilities = [];
    public array $data = [];

    protected $rules = [
        'apartment.property_id' => 'required|exists:properties,id',
        'apartment.apartment_type_id' => 'nullable|exists:apartment_types,id',
        'apartment.name' => 'required|string',
        'apartment.capacity_adults' => 'required|integer',
        'apartment.capacity_children' => 'required|integer',
        'facilities' => 'required|array',
        'facilities.*' => 'required',
    ];
    public function mount(Apartment $apartment)
    {
        $this->apartment = $apartment;
        $this->arrayDataList();
        if($this->apartment->exists){
            $this->isUpdate = true;
            $this->facilities = $apartment->facilities->pluck('id')->toArray();
        }
    }

    public function arrayDataList(){
        $this->data['properties'] = Property::get();
        $this->data['types'] = ApartmentType::get();
        $this->data['facilities'] = Facility::get();
    }

    public function render()
    {
        return view('livewire.apartment.form');
    }

    public function submit(){
        $this->validate();
        $this->apartment->save();
        $this->apartment->facilities()->sync($this->facilities);
        return redirect()->route('apartments.index');
    }
}
