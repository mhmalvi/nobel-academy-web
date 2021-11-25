<?php

namespace App\Http\Requests\Admin;

use App\Models\User;

class UserCreateRequest extends UserRequest
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
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'
        ];
    }

    public function save()
    {
        $user = User::create([
            'name' => $this->username,
            'email' => $this->email,
            'password' => password_hash($this->password, PASSWORD_DEFAULT),
        ]);

        if ($this->filled('profile_picture')) {
            $image_path = $this->storeProfilePicture();

            $user->profile_photo_path = $image_path;
            $user->save();
        }
    }
}
