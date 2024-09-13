<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'name',
        'image',
        'required_plan',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function paidMaterialDownloadHistories()
    {
        return $this->hasMany(PaidMaterialDownloadHistory::class);
    }
}
