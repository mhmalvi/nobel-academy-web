<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckEligibilityRequest extends FormRequest
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
            'name' => 'required|max:50|string',
            'email' => 'required|max:50|email',
            'contact' => 'required|max:50|string',
            'location' => 'required',
            'qualification' => 'required',
            'experience' => 'required',
            'work_location' => 'required',
            'q1' => "required",
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'q1.required' => "This question is required",
            'q2.required' => "This question is required",
            'q3.required' => "This question is required",
            'q4.required' => "This question is required",
            'q5.required' => "This question is required",
            'q6.required' => "This question is required",
            'q7.required' => "This question is required",
            'q8.required' => "This question is required",
        ];
    }
}
