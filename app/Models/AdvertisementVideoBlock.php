<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementVideoBlock extends Model
{
    protected $fillable = [
        'advertisement_section_id',
        'title',
        'body',
        'image',
        'url',
        'status'
    ];

    public function advertisementSection() {
        return $this->belongsTo(AdvertisementSection::class);
    }
}
