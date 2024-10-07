<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CsvMail extends Model
{
    protected $fillable = [
        'company_name',
        'email',
        'name',
        'group'
    ];
}
