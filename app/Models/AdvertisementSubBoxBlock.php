<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementSubBoxBlock extends Model
{
    protected $fillable = [
        'advertisement_box_block_id',
        'title',
        'body',
        'icon',
        'status'
    ];

    public function advertisementBoxBlock() {
        return $this->belongsTo(AdvertisementBoxBlock::class);
    }
}
