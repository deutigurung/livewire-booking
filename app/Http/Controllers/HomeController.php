<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $blogs = Blog::active()->latest()->get();
        $apartments = Apartment::latest()->get();
        return view('front.index',compact('blogs','apartments'));
    }

    public function about()
    {
        $title = 'About Us';
        $img = '/front/images/about.jpg';
        return view('front.about', compact('title','img'));
    }

    public function contact()
    {
        $title = 'Contact Us';
        $img = '/front/images/contact.jpg';
        return view('front.contact', compact('title','img'));
    }

    public function blog()
    {
        $title = 'Blog';
        $img = '/front/images/booking.jpg';
        $blogs = Blog::active()->latest()->get();
        return view('front.blog',compact('title','img','blogs'));
    }

    public function singleBlog($slug){
        $blog = Blog::where('slug',$slug)->first();
        $title = $blog->title;
        $img = '/front/images/booking.jpg';
        return view('front.blog-single',compact('title','img','blog'));
    }

    public function apartment()
    {
        $title = 'Book a apartment';
        $img = '/front/images/booking.jpg';
        $apartments = Apartment::latest()->get();
        return view('front.apartment',compact('title','img','apartments'));
    }

    public function singleApartment($id){
        $apartment = Apartment::findOrFail($id);
        $title = $apartment->name;
        $img = '/front/images/booking.jpg';
        return view('front.apartment-single',compact('title','img','apartment'));
    }
}
