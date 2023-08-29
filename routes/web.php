<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Apartment\ApartmentForm;
use App\Http\Livewire\Apartment\ApartmentList;
use App\Http\Livewire\Apartment\ApartmentPriceForm;
use App\Http\Livewire\Bed\BedForm;
use App\Http\Livewire\Bed\BedList;
use App\Http\Livewire\Blog\BlogForm;
use App\Http\Livewire\Blog\BlogList;
use App\Http\Livewire\City\CityForm;
use App\Http\Livewire\City\CityList;
use App\Http\Livewire\Country\CountryList;
use App\Http\Livewire\Country\Form as CountryForm;
use App\Http\Livewire\Property\PropertyForm;
use App\Http\Livewire\Property\PropertyList;
use App\Http\Livewire\Room\RoomForm;
use App\Http\Livewire\Room\RoomList;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/blog',[HomeController::class,'blog'])->name('blogs');
Route::get('/blog/{slug}',[HomeController::class,'singleBlog'])->name('singleBlog');
Route::get('/apartment',[HomeController::class,'apartment'])->name('apartments');
Route::get('/apartment/{id}',[HomeController::class,'singleApartment'])->name('singleApartment');





//Admin Route
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('country/create',CountryForm::class)->name('country.create');
    Route::get('countries',CountryList::class)->name('country.index');
    Route::get('countries/{country}',CountryForm::class)->name('country.edit');

    Route::get('cities/create',CityForm::class)->name('cities.create');
    Route::get('cities',CityList::class)->name('cities.index');
    Route::get('cities/{city}',CityForm::class)->name('cities.edit');

    Route::get('properties/create',PropertyForm::class)->name('properties.create');
    Route::get('properties',PropertyList::class)->name('properties.index');
    Route::get('properties/{property}',PropertyForm::class)->name('properties.edit');

    Route::get('apartments/create',ApartmentForm::class)->name('apartments.create');
    Route::get('apartments',ApartmentList::class)->name('apartments.index');
    Route::get('apartments/{apartment}',ApartmentForm::class)->name('apartments.edit');
    Route::get('apartments/{apartment}/price',ApartmentPriceForm::class)->name('apartments.price');


    Route::get('rooms/create',RoomForm::class)->name('rooms.create');
    Route::get('rooms',RoomList::class)->name('rooms.index');
    Route::get('rooms/{room}',RoomForm::class)->name('rooms.edit');

    Route::get('beds/create',BedForm::class)->name('beds.create');
    Route::get('beds',BedList::class)->name('beds.index');
    Route::get('beds/{bed}',BedForm::class)->name('beds.edit');

    Route::get('blogs/create',BlogForm::class)->name('blogs.create');
    Route::get('blogs',BlogList::class)->name('blogs.index');
    Route::get('blogs/{blog}',BlogForm::class)->name('blogs.edit');
});

