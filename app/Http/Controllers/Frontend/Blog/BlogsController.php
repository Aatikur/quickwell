<?php

namespace App\Http\Controllers\Frontend\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function showPost($slug, $id){
        $single_post = Blog::find($id);
        return view('web.blog.single-blog', compact('single_post'));
    }
}
