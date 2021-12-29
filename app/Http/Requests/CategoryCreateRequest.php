<?php

namespace App\Http\Requests;

use App\Models\Category;

class CategoryCreateRequest extends CategoryRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'slug' => 'required|unique:categories,slug',
        ];
    }

    public function save(): Category
    {
        return Category::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => strlen($this->description) > 0 ? $this->description : null,
        ]);
    }
}
