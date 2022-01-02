<?php

namespace App\Http\Requests;

use App\Models\Blog;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BlogRequest extends FormRequest
{
    public function messages()
    {
        return [
            'tilte.required' => "Title required",
        ];
    }

    protected function saveThumbnail()
    {
        //Get the file name without extension
        $file = $this->thumbnail;
        $thumbnailTitle = $this->thumbnail_title ? Str::slug($this->thumbnail_title) : Str::slug($this->title);
        $ext = $this->getClientOriginalExtension($file);
        $thumbnail = "{$thumbnailTitle}{$ext}";

        if (!Storage::exists("public/blogs")) {
            Storage::makeDirectory("public/blogs");
        }

        Image::make($file)
            ->fit(945, 552)
            ->save(storage_path('app/public/blogs/' . $thumbnail));

        return $thumbnail;
    }


    private function getClientOriginalExtension($file)
    {
        $encodedImgString = explode(',', $file, 2)[1];
        $decodedImgString = base64_decode($encodedImgString);
        $info = getimagesizefromstring($decodedImgString);

        $ext = image_type_to_extension($info[2]);

        return $ext;
    }


    protected function destroyThumbnail(Blog $blog)
    {
        Storage::delete('public/blogs/' . $blog->thumbnail);
    }
}
