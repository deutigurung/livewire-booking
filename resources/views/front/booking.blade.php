@extends('front.layout')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/contact.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/contact_responsive.css') }}">
<style>
    .error{
        color: red;
    }
</style>
@endsection

@section('js')
<script src="{{ asset('front/js/contact.js')}}"></script>
@endsection

@section('content')
@include('front.includes.breadcrumb')

<!-- Contact -->
<div class="contact">
    <div class="container">
        <div class="row">
            
            <!-- Contact Content -->
            <div class="col-lg-12">
                <div class="contact_content">
                    <div class="contact_title"><h2>Book an Apartment</h2></div>
                    <div class="contact_form_container">
                        <form action="{{ route('apartmentBookingStore')}}" class="contact_form"  method="POST" id="contact_form">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 input_container">
                                    <input type="text" name="apartment_id" value="{{ $apartment->name }}" class="contact_input" placeholder="Apartment">

                                    <input type="hidden" name="apartment_id" value="{{ $apartment->id }}" class="contact_input">
                                    @error('apartment_id') 
                                        <span class="error text-red-500">{{ $message }}</span> 
                                    @enderror
                                </div>
                                <div class="col-md-6 input_container">
                                    <input type="date" name="start_date" class="contact_input" placeholder="Check in Date">
                                    @error('start_date') 
                                        <span class="error text-red-500">{{ $message }}</span> 
                                    @enderror
                                </div>
                                <div class="col-md-6 input_container">
                                    <input type="date" name="end_date" class="contact_input" placeholder="Check out Date">
                                    @error('end_date') 
                                        <span class="error text-red-500">{{ $message }}</span> 
                                    @enderror
                                </div>
                                <div class="col-md-6 input_container">
                                    <input type="number" min="0" name="guest_adults" value="1" class="contact_input" placeholder="Total Adults">
                                    @error('guest_adults') 
                                        <span class="error text-red-500">{{ $message }}</span> 
                                    @enderror
                                </div>
                                <div class="col-md-6 input_container">
                                    <input type="number" min="0" name="guest_children" value="0" class="contact_input" placeholder="Total Children">
                                    @error('guest_children') 
                                        <span class="error text-red-500">{{ $message }}</span> 
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="contact_button">I'll Reserve</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection