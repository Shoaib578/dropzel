<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubscriptions extends Model
{
    protected $fillable= [
        "user_id",
        "start_date",
        "expiration_date"
    ];
    use HasFactory;
}
