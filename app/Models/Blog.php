<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Blog extends Model
{
    use HasFactory, SoftDeletes;
    use Searchable;

    protected $table = "blogs";

    protected $fillable = [
        'blog_title',
        'blog_content',
        'slug',
        'featured_image',
        'views',
        'status',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Searchable column for blog list.
     */
    public function toSearchableArray()
    {
        return [
            'blog_title' => $this->blog_title,
            'blog_content' => $this->blog_content,
            'slug' => $this->slug
        ];
    }
}
