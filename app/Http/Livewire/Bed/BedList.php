<?php

namespace App\Http\Livewire\Bed;

use App\Models\Bed;
use Livewire\Component;

class BedList extends Component
{
    protected $listeners = ['destroy'];
    public function render()
    {
        $beds = Bed::get();
        return view('livewire.bed.list',compact('beds'));
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
        Bed::findOrFail($id)->delete();
        return redirect()->route('beds.index');
    }
}
