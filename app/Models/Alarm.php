<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alarm extends Model
{
    protected $fillable = [
        'type',
        'related_id',
        'alarm',
        'from_user_id',
        'to_user_id',
        'status',
    ];

    public function receiver()
    {
        return $this->belongsTo(User::class, 'to_user_id', 'id');
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'from_user_id', 'id');
    }
}
