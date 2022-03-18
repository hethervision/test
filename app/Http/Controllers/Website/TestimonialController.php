<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //
    public function index()
    {

        $testimonials = Testimonial::query()->orderBy('rating','desc')->get();
        return view('website.testimonial.index')->with([
            'testimonials' => $testimonials
        ]);
    }
}
