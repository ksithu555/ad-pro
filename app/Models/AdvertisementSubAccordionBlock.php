<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementSubAccordionBlock extends Model
{
    protected $fillable = [
        'advertisement_accordion_block_id',
        'title',
        'body',
        'status'
    ];

    public function advertisementAccordionBlock() {
        return $this->belongsTo(AdvertisementAccordionBlock::class);
    }
}
