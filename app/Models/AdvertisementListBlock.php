<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementListBlock extends Model
{
    protected $fillable = [
        'advertisement_section_id',
        'title',
        'body',
        'image',
        'status'
    ];

    public function advertisementSection() {
        return $this->belongsTo(AdvertisementSection::class);
    }
}
