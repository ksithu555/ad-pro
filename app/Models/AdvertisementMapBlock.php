<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementMapBlock extends Model
{
    protected $fillable = [
        'advertisement_section_id',
        'title',
        'body',
        'url',
        'status'
    ];

    public function advertisementSection() {
        return $this->belongsTo(AdvertisementSection::class);
    }
}
