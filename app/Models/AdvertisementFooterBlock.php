<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementFooterBlock extends Model
{
    protected $fillable = [
        'advertisement_section_id',
        'type',
        'name',
        'url',
        'text',
        'status'
    ];

    public function advertisementSection() {
        return $this->belongsTo(AdvertisementSection::class);
    }
}
