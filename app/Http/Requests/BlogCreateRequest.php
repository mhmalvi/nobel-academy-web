<?php

namespace App\Http\Requests;

use App\Models\Blog;
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
            'title' => 'required|max:255|unique:App\Models\Blog,blog_title',
            'blog_slug' => 'unique:App\Models\Blog,blog_slug',
            'summary' => 'required|max:255',
            'summernote' => 'required',
            'meta_desc' => 'max:255',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048|dimensions:min_width=822,min_height=480'
        ];
    }


    public function save()
    {
        $slug = Str::slug($this->title);

        $blog = Blog::create([
            'user_id' => Auth::id(),
            'blog_title' => $this->title,
            'blog_slug' => ($this->has('urlSlug')) ? $this->urlSlug : $slug,
            'category_id' => is_null($this->category) ? $this->category : null,
            'blog_summery' => $this->summary,
            'blog_details' => $this->summernote,
            'meta_tags' => $this->meta_tags,
            'meta_keys' => $this->meta_keys,
            'meta_desc' => $this->meta_desc,
            'thumbnail' => $this->hasFile('image') ? $this->saveImage() : '',
            'thumbnail_alt' => $this->has('img_alt') ? $this->img_alt : ''
        ]);

        return $blog;
    }
}
