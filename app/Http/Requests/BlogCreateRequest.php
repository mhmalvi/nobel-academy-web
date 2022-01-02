<?php

namespace App\Http\Requests;

use App\Models\Blog;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BlogCreateRequest extends BlogRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
        ];
    }


    public function save()
    {
        if ($this->category_id == 0) $this->category_id = null;

        $blog = Post::create([
            'user_id ' => Auth::id(),
            'category_id ' => $this->category_id,
            'title' => $this->title,
            'slug' => $this->has('slug') ? $this->slug : Str::slug($this->title),
            'details' => $this->description,
            'meta_desc' => $this->meta_description,
            'meta_tags' => $this->meta_tags,
            'meta_keys' => $this->meta_keys,
            'thumbnail' => $this->filled('thumbnail') ? $this->saveThumbnail() : "",
            'published' => $this->isPublished,
        ]);

        return $blog;
    }
}
