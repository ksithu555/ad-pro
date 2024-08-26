<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementSection extends Model
{
    protected $fillable = [
        'advertisement_id',
        'name',
        'section_id',
        'order',
        'status'
    ];

    public function advertisement() {
        return $this->belongsTo(Advertisement::class);
    }

    public function section() {
        return $this->belongsTo(Section::class);
    }

    public function advertisementHeaderBlocks() {
        return $this->hasMany(AdvertisementHeaderBlock::class);
    }

    public function advertisementFooterBlocks() {
        return $this->hasMany(AdvertisementFooterBlock::class);
    }
}
