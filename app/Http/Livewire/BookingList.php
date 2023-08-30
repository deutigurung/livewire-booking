<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use Livewire\Component;

class BookingList extends Component
{
    public function render()
    {
        $bookings = Booking::get();
        return view('livewire.booking-list',compact('bookings'));
    }
}
