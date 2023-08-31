<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Blog;
use App\Models\Property;
use App\Rules\AvailableApartmentRule;
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

    public function booking($id){
        $apartment = Apartment::findOrFail($id);
        $title = 'Booking';
        $img = '/front/images/booking.jpg';
        return view('front.booking',compact('title','img','apartment'));
    }

    public function apartmentBookingStore(Request $request,)
    {
        $validate = $this->validate($request,[
            'apartment_id' => ['required', new AvailableApartmentRule],
            'guest_adults' => ['required','integer'],
            'guest_children' => ['nullable','integer'],
            'start_date' => ['required', 'date', ],
            'end_date' => ['required', 'date', 'after:start_date'],
        ]);
        auth()->user()->bookings()->create($validate);
        return redirect()->back()->with('success','Booking has been created');
    }

    public function search(Request $request)
    {
        $query = Property::query();
        // dd($request->all(),$request->adults,$request->children);
        $properties = $query
            ->when($request->adults || $request->children,function($query) use ($request){
                //withWhereHas is combine of with and whereHas 
                $query->withWhereHas('apartments',function($query) use ($request){
                    $query->where('capacity_adults','>=',$request->adults)
                            ->where('capacity_children','>=',$request->children);

                });
            })
            ->get();
        // dd($properties);
        $title = 'Property';
        $img = '/front/images/booking.jpg';
        return view('front.properties',compact('title','img','properties')); 
    }
}
