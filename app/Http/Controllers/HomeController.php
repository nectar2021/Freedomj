<?php
namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Testimonial;
use App\Models\City;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user_interface.index', [
            'featuredListings' => Property::where('is_featured', true)->take(6)->get(),
            'testimonials' => Testimonial::latest()->take(5)->get(),
            'cities' => City::withCount('properties')->get(),
        ]);
    }
}
