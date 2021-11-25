<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function storeProfilePicture()
    {
        $file = $this->profile_picture;
        $name = time() . '_' . $this->username;
        $extension = $this->getOriginalFileExtension($file);
        $file_name = $name . $extension;

        $this->makeDirectory();

        Image::make($file)
            ->fit(200)
            ->save(storage_path('app/public/users/' . $file_name));

        return 'app/public/users/' . $file_name;
    }

    private function getOriginalFileExtension($file)
    {
        $encodedImgString = explode(',', $file, 2)[1];
        $decodedImgString = base64_decode($encodedImgString);
        $info = getimagesizefromstring($decodedImgString);

        $ext = image_type_to_extension($info[2]);

        return $ext;
    }

    private function makeDirectory()
    {
        if (!Storage::exists('public/users')) {
            Storage::makeDirectory('public/users');
        }
    }
}
