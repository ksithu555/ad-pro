<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $fillable = [
        'bank_name',
        'branch_name',
        'account_type',
        'account_number',
        'account_name',
        'status'
    ];

    public function userPayments()
    {
        return $this->hasMany(UserPayment::class);
    }
}
