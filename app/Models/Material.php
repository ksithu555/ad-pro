<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'type',
        'name',
        'image',
        'required_plan',
        'status'
    ];
}
