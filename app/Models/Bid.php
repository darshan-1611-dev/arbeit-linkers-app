<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bid extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "bids";

    protected $fillable = [
        'user_id',
        'job_id',
        'price',
        'time_duration',
        'description',
        'bid_status',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Get Job Details
     *
     * */
    public function job_detail()
    {
        return $this->belongsTo(Job::class, 'job_id')->withTrashed();
    }

    /**
     * Get User Details
     *
     * */
    public function user_detail()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
