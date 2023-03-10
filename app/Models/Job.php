<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, SoftDeletes;

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

//    /**
//     * Get Bid Detail
//     */
//    public function bids()
//    {
//        return $this->belongsTo(Bid::class, 'is_bid_done', 'user_id')->whereRaw('bids.job_id = jobs.id');
//    }

}
