<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopBoxBlock extends Model
{
    protected $fillable = [
        'top_section_id',
        'title',
        'body',
        'icon',
        'status'
    ];

    public function topSection()
    {
        return $this->belongsTo(TopSection::class);
    }
}
