<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Resources\CategoriesCollection;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        return view('admin.categories.index');
    }

    /**
     * 
     */
    public function getCategories(Request $request)
    {
        return new CategoriesCollection($request->perPage > 0 ? Category::paginated($request->perPage) : Category::all());
    }

    /**
     * 
     */
    public function store(CategoryCreateRequest $request)
    {
        try {
            $category = $request->save();

            return response()->json([
                'message' => "Successfully created the Blog Category.",
                'category' => $category,
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went wrong",
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * 
     */
    public function edit(Category $category)
    {
        $category = new CategoryResource($category);

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * 
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        try {
            $old_slug = $category->slug;

            $category = $request->update($category);

            return response()->json([
                'message' => "Successfully updated the blog category!",
                'refresh' => $old_slug != $category->slug,
                'refresh_url' => route('admin.category.edit', $category->slug),
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went wrong",
                'error' => $th->getMessage(),
            ], 500);
        }
    }

    /**
     * 
     */
    public function destroy(Category $category)
    {
        try {
            if (!auth()->check()) abort(401);

            $category->delete();
            return response()->json([
                'message' => "Successfully deleted the blog category!"
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went wrong!",
                'error' => $th->getMessage(),
            ], 500);
        }
    }
}
