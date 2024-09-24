<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementImageBlock extends Model
{
    protected $fillable = [
        'advertisement_section_id',
        'title',
        'status'
    ];

    public function advertisementSection() {
        return $this->belongsTo(AdvertisementSection::class);
    }

    public function advertisementSubImageBlocks() {
        return $this->hasMany(AdvertisementSubImageBlock::class);
    }
}
