<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSearchKeyword extends Model
{
    use HasFactory;

    public $table = "job_search_keywords";

    public $fillable = [
        "user_id",
        "user_email",
        "search_text"
    ];
}
