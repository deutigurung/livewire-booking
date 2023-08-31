<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use Livewire\Component;
use Livewire\WithPagination;

class BookingList extends Component
{
    use WithPagination;
    public function render()
    {
        $bookings = Booking::paginate(25);
        return view('livewire.booking-list',compact('bookings'));
    }
}
