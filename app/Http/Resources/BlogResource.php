<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'action_user' => $this->user,
            'category' => $this->category ? $this->category->title : 'Uncategorized',
            'category_id' => ($this->category) ? $this->category->id : null, // this is for blog form
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->details,
            'meta_description' => $this->meta_desc,
            'meta_tags' => $this->meta_tags,
            'meta_keys' => $this->meta_keys,
            'thumbnail' => $this->thumbnail,
            'isPublished' => $this->published,
            'action_url' => ""
        ];
    }
}
