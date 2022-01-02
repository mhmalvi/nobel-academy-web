<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];
<<<<<<< Updated upstream

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'blog_slug' => [
                'source' => 'blog_title'
            ]
        ];
    }

    /**
     * Author
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
=======
>>>>>>> Stashed changes
}
