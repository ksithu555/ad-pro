<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPayment extends Model
{
    protected $fillable = [
        'user_id',
        'bank_account_id',
        'transfer_name',
        'transfer_at',
        'requested_plan',
        'plan_start',
        'plan_end',
        'amount',
        'paid',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bankAccount()
    {
        return $this->belongsTo(BankAccount::class);
    }
}
