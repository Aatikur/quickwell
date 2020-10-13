<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Package;
class FrontendController extends Controller
{
    public function index(){
        $blogs = Blog::where('status', 1)->latest()->limit(3)->get();
        $package1 = Package::where('status', 1)->where('id', 1)->first();
        $package2 = Package::where('status', 1)->where('id', 2)->first();

        return view('web.index', compact('blogs', 'package1', 'package2'));
    }
}
