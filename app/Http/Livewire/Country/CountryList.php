<?php

namespace App\Http\Livewire\Country;

use App\Models\Country;
use Livewire\Component;

class CountryList extends Component
{
    protected $listeners = ['destroy'];

    public function render()
    {
        $countries = Country::all();
        return view('livewire.country.list',compact('countries'));
    }

    public function deleteConfirm($method , $id = null){
        $this->dispatchBrowserEvent('swal:confirm',[
            'type' => 'warning',
            'title' => 'Are you sure want to delete?',
            'text' => '',
            'id' => $id,
            'method' => $method
        ]);
    }

    public function destroy($id){
        Country::findOrFail($id)->delete();
        return redirect()->route('country.index');
    }
}
