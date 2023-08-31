<?php

namespace App\Http\Livewire\Bed;

use App\Models\Bed;
use Livewire\Component;
use Livewire\WithPagination;


class BedList extends Component
{
    use WithPagination;
    protected $listeners = ['destroy'];
    public function render()
    {
        $beds = Bed::paginate(25);
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
