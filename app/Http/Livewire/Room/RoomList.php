<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;
use Livewire\WithPagination;

class RoomList extends Component
{
    use WithPagination;
    protected $listeners = ['destroy'];
   
    public function render()
    {
        $rooms = Room::paginate(25);
        return view('livewire.room.list',compact('rooms'));
    }

    public function deleteConfirm($method,$id = null){
        $this->dispatchBrowserEvent('swal:confirm',[
            'type' => 'warning',
            'title' => 'Are you sure want to delete?',
            'text' => '',
            'id' => $id,
            'method' => $method
        ]);
    }

    public function destroy($id){
        Room::findOrFail($id)->delete();
        return redirect()->route('rooms.index');
    }
}
