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
                    @foreach($blogs as $blog)
                    <div class="blog_post">
                        <div class="blog_post_image">
                            <img src="{{ asset('front/img/blog_1.jpg')}}" alt="">
                            <div class="blog_post_date"><a href="#">{{ date('M d, Y',strtotime($blog->created_at))}}</a></div>
                        </div>
                        <div class="blog_post_content">
                            <div class="blog_post_title"><a href="{{ route('singleBlog',$blog->slug)}}">{{$blog->title}}</a></div>
                            <div class="blog_post_info">
                                <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_4.png')}}" alt="">
                                        <a href="#">{{$blog->blog_category->name}}</a>
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
                                        <a href="#">{{ $blog->created_at->diffForHumans()}}</a>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <img src="{{ asset('front/img/icon_8.png')}}" alt="">
                                        <a href="#">3 comments</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog_post_text">
                                <p>{{ $blog->summary}}</p>
                            </div>
                            <div class="button blog_post_button"><a href="{{ route('singleBlog',$blog->slug)}}">Read More</a></div>
                        </div>
                    </div>
                    @endforeach

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
            @include('front.includes.right-sidebar')
        </div>
    </div>
</div>


@endsection