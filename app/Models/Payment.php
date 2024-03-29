<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "payments";

    protected $fillable = [
        'payment_id',
        'sender_id',
        'receiver_id',
        'job_id',
        'currency',
        'amount',
        'status',
        'method',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function job_detail()
    {
        return $this->belongsTo(Job::class, 'job_id', "id");
    }

    public function payment_sender_details()
    {
        return $this->belongsTo(User::class, 'sender_id', "id");
    }

    public function payment_receiver_details()
    {
        return $this->belongsTo(User::class, 'receiver_id', "id");
    }
}
