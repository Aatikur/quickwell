<?php

namespace App\Http\Controllers\Frontend\Testimonial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
class TestimonialController extends Controller
{
    public function index() {
        $testimonials = Testimonial::latest()->get();
        return view('web.testimonial.testimonial', compact('testimonials'));
    }
}
