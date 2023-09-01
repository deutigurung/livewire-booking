<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use App\Traits\WithSorting;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class BookingList extends Component
{
    use WithPagination , WithSorting;

    public array $searchColumn = [
        'apartmentName' => '',
        'username' => '',
        'total_price' => ['',''], //price between 100 & 200
        'payment_status' => '',
        'payment_method' => '',
        'date' => ['',''],
    ]; 
    public function render()
    {
        $bookings = Booking::query()
            ->select(['bookings.*','apartments.name as apartmentName','users.name as username'])
            ->join('apartments', 'apartments.id', '=', 'bookings.apartment_id')
            ->join('users', 'users.id', '=', 'bookings.user_id')
            ->where('bookings.id','<=',100);

        foreach($this->searchColumn as $column => $search){
            $bookings
            ->when($column == 'apartmentName', fn($bookings) => $bookings->search('apartments.name',$search))
            ->when($column == 'username', fn($bookings) => $bookings->search('users.name',$search))
            ->when($column == 'payment_status', fn($bookings) => $bookings->search('payment_status',$search))
            ->when($column == 'payment_method', fn($bookings) => $bookings->search('payment_method',$search))
            ->when($column == 'total_price', function($bookings) use ($search){
                if(is_numeric($search[0])){
                    $bookings->where('total_price','>=',$search[0]);
                }
                if(is_numeric($search[1])){
                    $bookings->where('total_price','<=',$search[1]);
                }
            })
            ->when($column == 'date', function($bookings) use ($search){
                if(!empty($search[0])){
                    $bookings->whereDate('start_date','>=',Carbon::parse($search[0])->format('Y-m-d'));
                }
                if(!empty($search[1])){
                    $bookings->whereDate('end_date','<=',Carbon::parse($search[1])->format('Y-m-d'));
                }
            });
        }
        $bookings->orderBy($this->sortBy,$this->orderBy);
        return view('livewire.booking-list',['bookings' => $bookings->paginate(15)]);
    }

    public function sortByColumn($column){
        $this->sortBy($column);
    }
}

