<?php

namespace App\Http\Livewire\Room;

use App\Models\Apartment;
use App\Models\Room;
use App\Models\RoomType;
use Livewire\Component;

class RoomForm extends Component
{
    public Room $room;

    public bool $isEdit = false;

    public array $data = [];

    protected $rules = [
        'room.apartment_id' => 'required|exists:apartments,id',
        'room.room_type_id' => 'nullable|exists:room_types,id',
        'room.name' => 'required|string',
    ];
    public function mount(Room $room)
    {
        $this->room = $room;
        $this->data['apartments'] = Apartment::get();
        $this->data['types'] = RoomType::get();
        if($this->room->exists){
            $this->isEdit = true;
        }
    }
    public function render()
    {
        return view('livewire.room.form');
    }

    public function submit(){
        $this->validate();
        $this->room->save();
        return redirect()->route('rooms.index');
    }

}
