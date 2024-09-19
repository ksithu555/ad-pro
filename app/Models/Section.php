<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'type',
        'name',
        'note',
        'required_plan',
        'status'
    ];

    public function advertisementSections() {
        return $this->hasMany(AdvertisementSection::class);
    }
}
