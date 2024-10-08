<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CsvMail extends Model
{
    protected $fillable = [
        'company_name',
        'postal_code',
        'address',
        'phone',
        'fax',
        'capital',
        'number_of_employees',
        'annual_turnover',
        'listed',
        'URL',
        'email',
        'established_date',
        'industry',
        'group'
    ];
}
