<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCreateRequest;
use App\Http\Resources\BlogsCollection;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        return view('admin.blogs.create');
    }

    /**
     * 
     */
    public function getBlogsByPagination(Request $request)
    {
        try {
            $perPage = $request->filled('items') ? $request->items : 10;
            return new BlogsCollection(
                Blog::where('title', 'LIKE', '%' . $request->search . '%')->latest()->paginate($perPage)
            );
        } catch (\Throwable $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * 
     */
    public function store(BlogCreateRequest $request)
    {
        try {

            $blog = $request->save();

            $link = route('blogDetail', ['slug' => $blog->slug]);

            $state = $blog->published == 1 ? 'saved' : 'drafted';

            $message = "Successfully $state." .
                ($blog->isPublished ? " <a href='$link' target='_blank'>View Post</a>" : '');

            return response()->json([
                'message' => $message,
            ], 200);
        } catch (\Throwable $th) {
            $response = [
                'message' => $th->getMessage(),
            ];

            return response()->json($response, 500);
        }
    }
}
