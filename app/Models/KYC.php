<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KYC extends Model
{
    protected $fillable = [
        'user_id',
        'id_type',
        'front_id',
        'back_id',
        'status'
    ];
}
