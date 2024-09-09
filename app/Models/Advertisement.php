<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'logo_white',
        'logo_color',
        'param_name',
        'menu_bar_status',
        'status'
    ];

    public function advertisementSections()
    {
        return $this->hasMany(AdvertisementSection::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function advertisementContacts()
    {
        return $this->hasMany(AdvertisementContact::class);
    }
}
