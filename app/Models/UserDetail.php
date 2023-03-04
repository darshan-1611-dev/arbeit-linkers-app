<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $table = "user_details";

    protected $fillable = [
        'user_id',
        'user_title',
        'is_experience',
        'job_title',
        'job_company',
        'job_location',
        'job_country',
        'job_start_date',
        'job_end_date',
        'is_working',
        'job_description',
        'school_name',
        'degree_title',
        'field_of_study',
        'education_start_date',
        'education_end_date',
        'education_description',
        'language',
        'language_proficiency',
        'skills',
        'hourly_rate',
        'street_address',
        'city',
        'state',
        'country',
        'postal_code',
        'profile_photo_path',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
