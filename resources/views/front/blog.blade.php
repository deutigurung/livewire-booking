@extends('front.layout')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/blog.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('front/css/blog_responsive.css') }}">
@endsection

@section('js')
<script src="{{ asset('front/js/blog.js')}}"></script>
@endsection

@section('content')

@include('front.includes.breadcrumb')

<!-- Blog -->

<div class="blog">
    <div class="container">
        <div class="row">
            
            <!-- Blog Posts -->
            <div class="col-lg-9">
                <div class="blog_posts">
                    
                    <!-- Blog Post -->
                    <div class="blog_post">
                        <div class="blog_post_image">
                            <img src="{{ asset('front/img/blog_1.jpg')}}" alt="">
                            <div class="blog_post_date"><a href="#">Oct 20, 2018</a></div>
                        </div>
                        <div class="blog_post_content">
                            <div class="blog_post_title"><a href="#">Top dream destinations</a></div>
                            <div class="blog_post_info">
                                <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_4.png')}}" alt="">
                                        <a href="#">News</a>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_5.png')}}" alt="">
                                        <a href="#">21 Likes</a>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_6.png')}}" alt="">
                                        <a href="#">602 views</a>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_7.png')}}" alt="">
                                        <a href="#">1 min</a>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_8.png')}}" alt="">
                                        <a href="#">3 comments</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog_post_text">
                                <p>Vivamus auctor mi eget odio feugiat, quis aliquet velit ornare. Integer egestas sit amet neque sed elementum. Fusce ut turpis felis. Etiam pretium pharetra augue, ac porttitor dolor consequat eget. Cras tempor suscipit enim vehicula ultrices. Mauris sed orci blandit.</p>
                            </div>
                            <div class="button blog_post_button"><a href="#">Read More</a></div>
                        </div>
                    </div>

                    <!-- Blog Post -->
                    <div class="blog_post">
                        <div class="blog_post_image">
                            <img src="{{ asset('front/img/blog_2.jpg')}}" alt="">
                            <div class="blog_post_date"><a href="#">Oct 20, 2018</a></div>
                        </div>
                        <div class="blog_post_content">
                            <div class="blog_post_title"><a href="#">How to book your stay</a></div>
                            <div class="blog_post_info">
                                <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_4.png')}}" alt="">
                                        <a href="#">News</a>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_5.png')}}" alt="">
                                        <a href="#">21 Likes</a>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_6.png')}}" alt="">
                                        <a href="#">602 views</a>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_7.png')}}" alt="">
                                        <a href="#">1 min</a>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_8.png')}}" alt="">
                                        <a href="#">3 comments</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog_post_text">
                                <p>Vivamus auctor mi eget odio feugiat, quis aliquet velit ornare. Integer egestas sit amet neque sed elementum. Fusce ut turpis felis. Etiam pretium pharetra augue, ac porttitor dolor consequat eget. Cras tempor suscipit enim vehicula ultrices. Mauris sed orci blandit.</p>
                            </div>
                            <div class="button blog_post_button"><a href="#">Read More</a></div>
                        </div>
                    </div>

                    <!-- Blog Post -->
                    <div class="blog_post">
                        <div class="blog_post_image">
                            <img src="{{ asset('front/img/blog_3.jpg')}}" alt="">
                            <div class="blog_post_date"><a href="#">Oct 20, 2018</a></div>
                        </div>
                        <div class="blog_post_content">
                            <div class="blog_post_title"><a href="#">Perfect beach wedding</a></div>
                            <div class="blog_post_info">
                                <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_4.png')}}" alt="">
                                        <a href="#">News</a>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_5.png')}}" alt="">
                                        <a href="#">21 Likes</a>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_6.png')}}" alt="">
                                        <a href="#">602 views</a>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_7.png')}}" alt="">
                                        <a href="#">1 min</a>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_8.png')}}" alt="">
                                        <a href="#">3 comments</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog_post_text">
                                <p>Vivamus auctor mi eget odio feugiat, quis aliquet velit ornare. Integer egestas sit amet neque sed elementum. Fusce ut turpis felis. Etiam pretium pharetra augue, ac porttitor dolor consequat eget. Cras tempor suscipit enim vehicula ultrices. Mauris sed orci blandit.</p>
                            </div>
                            <div class="button blog_post_button"><a href="#">Read More</a></div>
                        </div>
                    </div>

                    <!-- Page Nav -->
                    <div class="page_nav">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li class="active"><a href="#">01.</a></li>
                            <li><a href="#">02.</a></li>
                            <li><a href="#">03.</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="sidebar">
                    
                    <!-- Search -->
                    <div class="sidebar_search">
                        <form action="#" class="sidebar_search_form" id="sidebar_saerch_form">
                            <input type="text" class="sidebar_search_input" placeholder="Keyword" required="required" wfd-id="id4">
                            <button class="sidebar_search_button">Search</button>
                        </form>
                    </div>

                    <!-- Recent Posts -->
                    <div class="recent_posts">
                        <div class="sidebar_title"><h4>Recent Posts</h4></div>
                        <div class="sidebar_list">
                            <ul>
                                <li><a href="#">Featured Product</a></li>
                                <li><a href="#">Standard Post</a></li>
                                <li><a href="#">Gallery Post</a></li>
                                <li><a href="#">Video Post</a></li>
                                <li><a href="#">Audio Post</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="categories">
                        <div class="sidebar_title"><h4>Categories</h4></div>
                        <div class="sidebar_list">
                            <ul>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Hotel</a></li>
                                <li><a href="#">Vacation</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="tags">
                        <div class="sidebar_title"><h4>Tags</h4></div>
                        <div class="tags_container">
                            <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                <li><a href="#">news</a></li>
                                <li><a href="#">hotel</a></li>
                                <li><a href="#">vacation</a></li>
                                <li><a href="#">reservation</a></li>
                                <li><a href="#">booking</a></li>
                                <li><a href="#">video</a></li>
                                <li><a href="#">clients</a></li>
                                <li><a href="#">reviews</a></li>
                                <li><a href="#">destinations</a></li>
                                <li><a href="#">swimming pool</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Special Offer -->
                    <div class="special_offer">
                        <div class="background_image" style="background-image:url(/front/images/special_offer.jpg)"></div>
                        <div class="special_offer_container text-center">
                            <div class="special_offer_title">Special Offer</div>
                            <div class="special_offer_subtitle">Family Room</div>
                            <div class="button special_offer_button"><a href="#">Book now</a></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


@endsection