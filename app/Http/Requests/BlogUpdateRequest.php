<?php

namespace App\Http\Requests;


use Illuminate\Support\Str;

class BlogUpdateRequest extends BlogRequest
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
            'title' => 'required|max:255',
            'summary' => 'required|max:255',
            'summernote' => 'required',
            'meta_desc' => 'max:255',
        ];
    }


    public function update($blog)
    {
        $blog->blog_title = $this->title;
        $blog->blog_slug = ($this->has('urlSlug')) ? $this->urlSlug : Str::slug($this->title);
        $blog->blog_summery = $this->summary;
        $blog->blog_details = $this->summernote;
        $blog->category_id = $this->category;
        $blog->meta_tags = $this->meta_tags;
        $blog->meta_keys = $this->meta_keys;
        $blog->meta_desc = $this->meta_desc;
        $blog->thumbnail_alt = $this->img_alt;

        if ($this->hasFile('image')) {
            $blog->thumbnail = $this->saveImage();
        }

        $blog->save();
    }
}
