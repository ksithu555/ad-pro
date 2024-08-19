<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alarm extends Model
{
    protected $fillable = [
        'type',
        'alarm',
        'from_email',
        'to_email',
        'related_id',
        'status',
    ];
}
