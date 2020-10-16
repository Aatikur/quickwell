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
        $packages = Package::where('status', 1)->latest()->limit(2)->get();
        return view('web.index', compact('blogs', 'packages'));
    }
}
