<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementBoxBlock extends Model
{
    protected $fillable = [
        'advertisement_section_id',
        'title',
        'body',
        'status'
    ];

    public function advertisementSection() {
        return $this->belongsTo(AdvertisementSection::class);
    }

    public function advertisementSubBoxBlocks() {
        return $this->hasMany(AdvertisementSubBoxBlock::class);
    }
}
