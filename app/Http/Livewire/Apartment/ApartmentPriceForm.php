<?php

namespace App\Http\Livewire\Apartment;

use App\Models\Apartment;
use App\Models\ApartmentPrice;
use Carbon\Carbon;
use Hamcrest\Arrays\IsArray;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;

class ApartmentPriceForm extends Component
{
    public Apartment $apartment;
    public array $apartmentPrices = [];
    public int $apartmentPriceId = 0;
    public $start_date;
    public $end_date;
    public $price;
    protected $listeners = ['destroy' => 'deletePrice'];

    protected $rules = [
        'price' => 'required|integer',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date|after:start_date',
    ];

    public function apartmentPriceRules() {
        $apartmentPrices = [];
        foreach ($this->apartmentPrices as $index => $price) {
            $apartmentPrices[$index] = $this->validate([
                'apartmentPrices.'.$index.'.price' => 'required|numeric',
                'apartmentPrices.'.$index.'.start_date' => 'required|date',
                'apartmentPrices.'.$index.'.end_date' => 'nullable|date|after:apartmentPrices.'.$index.'.start_date',
            ]);
        }
    }
    public function mount(Apartment $apartment)
    {
        $this->apartment = $apartment;
    }
    public function render()
    {
        return view('livewire.apartment.price-form');
    }

    public function storePrice()
    {
        $this->validate();

        if($this->apartmentPriceId > 0){
            $apartmentPrice = ApartmentPrice::findOrFail($this->apartmentPriceId);
            $apartmentPrice->update([
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
                'price' => $this->price,
            ]);
        }else{
            $this->apartment->apartment_prices()->create([
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
                'price' => $this->price,
            ]);
        }
       
        $this->reset(['price','start_date','end_date']);
        return redirect()->route('apartments.price',$this->apartment);
    }

    public function editApartmentPrice($id){
        $this->apartmentPriceId = $id;
        $apartmentPrice = ApartmentPrice::findOrFail($id);
        $this->price = $apartmentPrice->price;
        $this->start_date = Carbon::parse($apartmentPrice->start_date)->format('Y-m-d');
        $this->end_date = Carbon::parse($apartmentPrice->end_date)->format('Y-m-d');
    }

    public function cancelApartmentPriceEdit(){
        $this->resetValidation();
        $this->reset('apartmentPriceId');
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

    public function deletePrice($id)
    {
        ApartmentPrice::findOrFail($id)->delete();
        return redirect()->route('apartments.price',$this->apartment);
    }

}
