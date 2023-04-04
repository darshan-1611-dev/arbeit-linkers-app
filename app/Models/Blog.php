<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

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
}
