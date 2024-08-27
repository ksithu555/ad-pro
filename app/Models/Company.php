<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'business',
        'purpose',
        'industry',
        'position',
        'postal_code',
        'room_no',
        'building',
        'block',
        'city',
        'prefecture',
        'country',
        'website',
        'logo',
        'description',
        'founder_name',
        'founder_image'
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
}
