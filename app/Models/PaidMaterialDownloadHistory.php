<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaidMaterialDownloadHistory extends Model
{
    protected $fillable = [
        'user_id',
        'material_id',
        'paid'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
