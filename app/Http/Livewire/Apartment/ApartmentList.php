<?php

namespace App\Http\Livewire\Apartment;

use App\Models\Apartment;
use Livewire\Component;
use Livewire\WithPagination;

class ApartmentList extends Component
{
    use WithPagination;
    protected $listeners = ['destroy'];
    public function render()
    {
        $apartments = Apartment::paginate(25);
        return view('livewire.apartment.list',compact('apartments'));
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
        Apartment::findOrFail($id)->delete();
        return redirect()->route('apartments.index');
    }
}
