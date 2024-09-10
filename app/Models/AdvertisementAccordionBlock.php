<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementAccordionBlock extends Model
{
    protected $fillable = [
        'advertisement_section_id',
        'title',
        'status'
    ];

    public function advertisementSection() {
        return $this->belongsTo(AdvertisementSection::class);
    }

    public function advertisementSubAccordionBlocks() {
        return $this->hasMany(AdvertisementSubAccordionBlock::class);
    }
}
