<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryUpdateRequest extends CategoryRequest
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
            'slug' => 'required|unique:categories,slug,' . $this->id,
        ];
    }

    public function update(Category $category)
    {
        $category->title = $this->title;
        $category->slug = Str::slug($this->slug);
        $category->description = $this->description;

        $category->update();
        return $category;
    }
}
