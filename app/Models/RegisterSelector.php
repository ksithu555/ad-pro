<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterSelector extends Model
{
    protected $table = 'register_selectors';

    protected $fillable = [
        'type',
        'name',
        'created_at',
        'updated_at',
    ];

    // Define relationships to companies based on the type
    public function companiesByBusiness()
    {
        return $this->hasMany(Company::class, 'business', 'id');
    }

    public function companiesByPurpose()
    {
        return $this->hasMany(Company::class, 'purpose', 'id');
    }

    public function companiesByIndustry()
    {
        return $this->hasMany(Company::class, 'industry', 'id');
    }

    public function companiesByPosition()
    {
        return $this->hasMany(Company::class, 'position', 'id');
    }
}
