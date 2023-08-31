<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use Livewire\Component;
use Livewire\WithPagination;

class CityList extends Component
{
    use WithPagination;
    protected $listeners = ['destroy'];
    public function render()
    {
        $cities = City::paginate(25);
        return view('livewire.city.list',compact('cities'));
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
        City::findOrFail($id)->delete();
        return redirect()->route('cities.index');
    }
}
