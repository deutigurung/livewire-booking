<?php

namespace App\Http\Livewire\Property;

use App\Models\Property;
use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;
class PropertyList extends Component
{
    use WithPagination;
    protected $listeners = ['destroy'];

    public function render()
    {
        $query = Property::query()->withCount('apartments');
        if(auth()->user()->role_id == Role::OWNER_ROLE){
            $query->where('owner_id', auth()->id());
        }
        $properties = $query->latest()->paginate(25);
        return view('livewire.property.list',compact('properties'));
    }

    public function deleteConfirm($method,$id=null){
        $this->dispatchBrowserEvent('swal:confirm',[
            'type' => 'warning',
            'title' => 'Are you sure want to delete?',
            'text' => '',
            'id' => $id,
            'method' => $method
        ]);
    }

    public function destroy($id){
        Property::findOrFail($id)->delete();
        return redirect()->route('properties.index');
    }
}
