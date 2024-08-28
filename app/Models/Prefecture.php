<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    protected $fillable = [
        'english_name',
        'name'
    ];

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
