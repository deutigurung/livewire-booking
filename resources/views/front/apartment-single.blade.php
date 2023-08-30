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

<!-- Details Right -->

<div class="details" style="margin-top: 73px;">
    <div class="container">
        <div class="row">
            
            <!-- Details Image -->
            <div class="col-xl-7 col-lg-6">
                <div class="details_image">
                    <div class="background_image" style="background-image:url(/front/images/index_blog_1.jpg)"></div>
                </div>
            </div>

            <!-- Details Content -->
            <div class="col-xl-5 col-lg-6">
                <div class="details_content">
                    <div class="details_title">{{ $apartment->title}}</div>
                    <div class="details_list">
                        <ul>
                            @foreach($apartment->facilities as $facility)
                            <li>{{ $facility->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="details_long_list">
                        <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                            @foreach($apartment->facilities as $facility)
                            <li>{{ $facility->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="book_now_button"><a href="{{ route('booking',$apartment->id)}}">Book Now</a></div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection