<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogRequest extends FormRequest
{
    protected function saveImage()
    {
        $file = $this->file('image');
        $imageTitle = $this->img_title ? Str::slug($this->img_title) : Str::slug($this->title);
        $ext = $file->getClientOriginalExtension();
        $image = "{$imageTitle}.{$ext}";

        //check if directory exist or not
        if (!Storage::exists("public/blogs")) {
            Storage::makeDirectory("public/blogs");
        }

        Storage::putFileAs('public/blogs', $file, $image);

        return $image;
    }
}
