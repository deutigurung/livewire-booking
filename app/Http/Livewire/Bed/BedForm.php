<?php

namespace App\Http\Livewire\Bed;

use App\Models\Bed;
use App\Models\BedType;
use App\Models\Room;
use Livewire\Component;

class BedForm extends Component
{
    public Bed $bed;

    public bool $isUpdate = false;

    public array $data = [];

    protected $rules = [
        'bed.room_id' => 'required|exists:rooms,id',
        'bed.bed_type_id' => 'nullable|exists:bed_types,id',
        'bed.name' => 'required|string',
    ];
    public function mount(Bed $bed)
    {
        $this->bed = $bed;
        $this->data['rooms'] = Room::get();
        $this->data['types'] = BedType::get();
        if($this->bed->exists){
            $this->isUpdate = true;
        }
    }
    public function render()
    {
        return view('livewire.bed.form');
    }

    public function submit(){
        $this->validate();
        $this->bed->save();
        return redirect()->route('beds.index');
    }
}
