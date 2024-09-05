<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'business',
        'purpose',
        'industry',
        'position',
        'phone',
        'postal_code',
        'prefecture_id',
        'address',
        'website',
        'overview'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function businessType()
    {
        return $this->belongsTo(RegisterSelector::class, 'business', 'id')
            ->where('type', 'business');
    }

    public function purposeType()
    {
        return $this->belongsTo(RegisterSelector::class, 'purpose', 'id')
            ->where('type', 'purpose');
    }

    public function industryType()
    {
        return $this->belongsTo(RegisterSelector::class, 'industry', 'id')
            ->where('type', 'industry');
    }

    public function positionType()
    {
        return $this->belongsTo(RegisterSelector::class, 'position', 'id')
            ->where('type', 'position');
    }

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
}
