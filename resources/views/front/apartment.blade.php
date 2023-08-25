@extends('front.layout')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/booking.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/booking_responsive.css') }}">
@endsection

@section('js')
<script src="{{ asset('front/js/booking.js')}}"></script>
@endsection

@section('content')

@include('front.includes.breadcrumb')

<!-- Booking -->

<div class="booking">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Booking Slider -->
                <div class="booking_slider_container">
                    <div class="owl-carousel owl-theme booking_slider owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1140px;">
                                @foreach($apartments as $apartment)
                                <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                                    <div class="booking_item">
                                        <div class="background_image" style="background-image:url(/front/images/booking_1.jpg)"></div>
                                        <div class="booking_overlay trans_200"></div>
                                        <div class="booking_item_content">
                                            <div class="booking_item_list">
                                                <ul>
                                                    @foreach($apartment->facilities as $facility)
                                                    <li>{{ $facility->name }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="booking_price">$120/Night</div>
                                        <div class="booking_link">
                                            <a href="{{ route('singleApartment',$apartment->id)}}">{{$apartment->name}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                       
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev">
                                <span aria-label="Previous">‹</span>
                            </button>
                            <button type="button" role="presentation" class="owl-next">
                                <span aria-label="Next">›</span>
                            </button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection