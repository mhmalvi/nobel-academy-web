<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use DB;

class BlogController extends Controller
{
    /**
     * showing all blogs
     */
    public function index(){
        $blogs = DB::table('blogs')->orderBy('created_at', 'desc')->paginate(3);
        return view('pages.blogs', compact('blogs'));
    }


    /**
     * Get specific blog
     */
    public function blogDetails($slug){
        $slug = $slug;

        $blog = Blog::where('blog_slug', $slug)->first();

        return view('pages.blogDetails', compact('blog'));
    }
}
