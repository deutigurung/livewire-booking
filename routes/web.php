<?php

use App\Http\Livewire\Country\CountryList;
use App\Http\Livewire\Country\Form as CountryForm;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('country/create',CountryForm::class)->name('country.create');
Route::get('countries',CountryList::class)->name('country.index');
Route::get('countries/{country}',CountryForm::class)->name('country.edit');

