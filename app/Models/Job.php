<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Job extends Model
{
    use HasFactory, SoftDeletes;
    use Searchable;

    protected $table = "jobs";

    protected $fillable = [
        'user_id',
        'project_title',
        'project_description',
        'job_type',
        'skills',
        'min_salary',
        'max_salary',
        'job_duration',
        'experience_level',
        'is_bid_done',
        'payment_status',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get Job Detail
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get Job Detail
     */
    public function user_details()
    {
        return $this->belongsTo(UserDetail::class, 'user_id', "user_id");
    }

    /**
     * Searchable column for job list.
    */
    public function toSearchableArray()
    {
        return [
            'project_title' => $this->project_title,
            'project_description' => $this->project_description,
            'skills' => $this->skills,
            'min_salary' => $this->min_salary,
            'max_salary' => $this->max_salary,
            'job_duration' => $this->job_duration,
            'experience_level' => $this->experience_level,
        ];
    }
}
