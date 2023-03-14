<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactInquire extends Model
{
    use HasFactory;

    protected $table = "contact_inquires";

    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "message"
    ];
}
