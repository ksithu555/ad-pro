<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopSection extends Model
{
    protected $fillable = [
        'type',
        'title',
        'body',
        'order',
        'status'
    ];

    public function topBoxBlocks()
    {
        return $this->hasMany(TopBoxBlock::class);
    }
}
