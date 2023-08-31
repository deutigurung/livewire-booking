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

@foreach($properties as $property)
{{ dd($property->apartments)}}
<!-- Booking -->
<div class="details">
    <div class="container">
        <div class="row">

            <!-- Details Content -->
            <div class="col-xl-5 col-lg-6 order-lg-1 order-2">
                <div class="details_content">
                    <div class="details_title">Double Room</div>
                    <div class="details_list">
                        <ul>
                            <li>27 m² Patio</li>
                            <li>Balcony with view</li>
                            <li>Garden / Mountain view</li>
                            <li>Flat-screen TV</li>
                            <li>Air conditioning</li>
                            <li>Soundproofing</li>
                            <li>Private bathroom</li>
                            <li>Free WiFi</li>
                        </ul>
                    </div>
                    <div class="details_long_list">
                        <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <li>Balcony</li>
                            <li>Mountain view</li>
                            <li>Terrace</li>
                            <li>TV</li>
                            <li>Satellite Channels</li>
                            <li>Safety Deposit Box</li>
                            <li>Heating</li>
                            <li>Sofa</li>
                            <li>Tile/Marble floor</li>
                            <li>Mosquito net</li>
                            <li>Wardrobe/Closet</li>
                            <li>Sofa bed</li>
                            <li>Shower</li>
                            <li>Hairdryer</li>
                            <li>Free toiletries</li>
                            <li>Toilet</li>
                            <li>Bath or Shower</li>
                            <li>Toilet paper</li>
                            <li>Tea/Coffee Maker</li>
                            <li>Minibar</li>
                            <li>Dining area</li>
                            <li>Electric kettle</li>
                            <li>Dining table</li>
                            <li>Outdoor furniture</li>
                            <li>Outdoor dining area</li>
                            <li>Towels</li>
                            <li>Linen</li>
                            <li>Upper floors accessible by lift</li>
                        </ul>
                    </div>
                    <div class="book_now_button"><a href="#">Book Now</a></div>
                </div>
            </div>

            <!-- Details Image -->
            <div class="col-xl-7 col-lg-6 order-lg-2 order-1">
                <div class="details_image">
                    <div class="background_image" style="background-image:url(images/details_2.jpg)"></div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="booking">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Booking Slider -->
                <div class="booking_slider_container">
                    <div class="owl-carousel owl-theme booking_slider owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1140px;">
                                @foreach($property->apartments as $apartment)
                                <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                                    <div class="booking_item">
                                        <div class="background_image" style="background-image:url(/front/images/booking_1.jpg)"></div>
                                        <div class="booking_overlay trans_200"></div>
                                        <div class="booking_price">$ {{ $apartment->calculatePriceForDates()}}/Night</div>

                                        <div class="booking_item_content">
                                            <div class="booking_item_list">
                                                <ul>
                                                    @foreach($apartment->facilities as $facility)
                                                    <li>{{ $facility->name }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
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
@endforeach

@endsection