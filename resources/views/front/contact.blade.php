@extends('front.layout')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/contact.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/contact_responsive.css') }}">
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
            <div class="col-lg-6">
                <div class="contact_content">
                    <div class="contact_title"><h2>Get in touch</h2></div>
                    <div class="contact_list">
                        <ul>
                            <li>Main Str, no 253, New York, NY</li>
                            <li>+546 990221 123</li>
                            <li>music@contact.com</li>
                        </ul>
                    </div>
                    <div class="contact_form_container">
                        <form action="#" class="contact_form" id="contact_form">
                            <div class="row">
                                <div class="col-md-6 input_container">
                                    <input type="text" class="contact_input" placeholder="Your name" required="required" wfd-id="id4">
                                </div>
                                <div class="col-md-6 input_container">
                                    <input type="email" class="contact_input" placeholder="Your email address" required="required" wfd-id="id5">
                                </div>
                            </div>
                            <div class="input_container"><input type="text" class="contact_input" placeholder="Subject" wfd-id="id6"></div>
                            <div class="input_container"><textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea></div>
                            <button class="contact_button">Send</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Google Map -->
            <div class="col-xl-5 col-lg-6 offset-xl-1">
                <div class="contact_map">
                    <!-- Google Map -->
                    <div class="map">
                        <div id="google_map" class="google_map">
                            <div class="map_container">
                                <div id="map" style="position: relative; overflow: hidden;">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection