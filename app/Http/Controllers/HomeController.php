<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\Property;
use App\Rules\AvailableApartmentRule;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $blogs = Blog::active()->latest()->paginate(25);
        $apartments = Apartment::latest()->paginate(25);
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
        $blogs = Blog::active()->latest()->paginate(25);
        return view('front.blog',compact('title','img','blogs'));
    }

    public function singleBlog($slug){
        $blog = Blog::where('slug',$slug)->first();
        $title = $blog->title;
        $img = '/front/images/booking.jpg';
        return view('front.blog-single',compact('title','img','blog'));
    }

    public function apartment(Request $request)
    {
        $title = 'Book a apartment';
        $img = '/front/images/booking.jpg';
        $apartments = Apartment::when($request->property,function($query) use ($request){
            $query->where('property_id',$request->property);
        })
        ->latest()->paginate(25);
        return view('front.apartment',compact('title','img','apartments'));
    }

    public function singleApartment($id){
        $apartment = Apartment::findOrFail($id);
        $title = $apartment->name;
        $img = '/front/images/booking.jpg';
        return view('front.apartment-single',compact('title','img','apartment'));
    }

    public function booking($id = null){
        $apartment = Apartment::find($id);
        $title = 'Booking';
        $img = '/front/images/booking.jpg';
        return view('front.booking',compact('title','img','apartment'));
    }

    public function apartmentBookingStore(Request $request,)
    {
        $validate = $this->validate($request,[
            'guest_adults' => ['required','integer'],
            'guest_children' => ['nullable','integer'],
            'start_date' => ['required', 'date', ],
            'end_date' => ['required', 'date', 'after:start_date'],
            'apartment_id' => ['required', new AvailableApartmentRule],
        ]);
        $booking = auth()->user()->bookings()->create($validate);
        return redirect()->route('booking.payment',$booking)->with('success','Booking has been created');
    }

    public function chooseBookingPayment(Booking $booking){
        $title = 'Booking';
        $img = '/front/images/booking.jpg';
        return view('front.payment',compact('title','img','booking'));
    }

    public function search(Request $request)
    {
        $query = Property::query();
        $properties = $query
            ->when($request->adults || $request->children,function($query) use ($request){
                //withWhereHas is combine of with and whereHas 
                $query->withWhereHas('apartments',function($query) use ($request){
                    $query->where('capacity_adults','>=',$request->adults)
                            ->where('capacity_children','>=',$request->children);

                });
            })
            ->paginate(30);
        // dd($properties);
        $title = 'Property';
        $img = '/front/images/booking.jpg';
        return view('front.properties',compact('title','img','properties')); 
    }
}
