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
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-danger">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="contact_content">
                    <div class="contact_title"><h2>Select Payment Method</h2></div>
                    <div class="contact_form_container">
                        <form action="{{ route('paypal.handlePayment')}}" class="contact_form">
                            <input type="hidden" name="booking_id" value="{{ $booking->id}}">
                            <button type="submit" class="contact_button">Pay ${{$booking->total_price}} via Paypal</button>
                        </form>

                        <form action="#" class="contact_form">
                            <button type="submit" class="contact_button">Pay ${{$booking->total_price}} via Strip</button>
                        </form>

                        <form action="#" class="contact_form">
                            <button type="submit" class="contact_button">Pay ${{$booking->total_price}} via Cash On Delivery</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection