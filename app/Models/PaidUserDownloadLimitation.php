<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaidUserDownloadLimitation extends Model
{
    protected $fillable = [
        'user_id',
        'plan_start',
        'plan_end',
        'count'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
