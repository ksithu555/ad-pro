<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementCountdownBlock extends Model
{
    protected $fillable = [
        'advertisement_section_id',
        'title',
        'body',
        'target_datetime',
        'status'
    ];

    public function advertisementSection() {
        return $this->belongsTo(AdvertisementSection::class);
    }
}
