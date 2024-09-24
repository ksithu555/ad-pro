<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementSubImageBlock extends Model
{
    protected $fillable = [
        'advertisement_image_block_id',
        'title',
        'body',
        'image',
        'image_hover',
        'status'
    ];

    public function advertisementImageBlock() {
        return $this->belongsTo(AdvertisementImageBlock::class);
    }
}
