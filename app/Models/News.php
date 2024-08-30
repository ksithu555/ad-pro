<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'body',
        'image',
        'created_by'
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'created_by', 'id');
    }
}
