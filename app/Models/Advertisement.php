<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'param_name'
    ];

    public function advertisement()
    {
        return $this->hasOne(Advertisement::class);
    }
}
