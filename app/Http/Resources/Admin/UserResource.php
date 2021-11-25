<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'username' => $this->name,
            'email' => $this->email,
            'current_team_id' => $this->current_team_id,
            'profile_photo' => $this->profile_photo_path,
            'created_at' => $this->created_at->format('h:ia d M, Y'),
        ];
    }
}
