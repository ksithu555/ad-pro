<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementContact extends Model
{
    protected $fillable = [
        'advertisement_id',
        'subject',
        'name',
        'email',
        'phone',
        'content'
    ];

    public function advertisement()
    {
        return $this->belongsTo(Advertisement::class);
    }
}
