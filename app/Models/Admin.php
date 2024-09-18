<?php

namespace App\Models;

use App\Mail\ResetPasswordEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Auth\Passwords\CanResetPassword as CanResetPasswordTrait;

class Admin extends Model implements UserContract, CanResetPassword
{
    use AuthenticatableTrait;
    use CanResetPasswordTrait;

    // Define fillable and hidden attributes
    protected $fillable = ['role', 'name', 'email', 'password', 'status'];
    protected $hidden = ['password'];

    public function sendPasswordResetNotification($token)
    {
        $resetUrl = url(route('admin.reset.password', ['token' => $token, 'email' => $this->email], false));
        Mail::to($this->email)->send(new ResetPasswordEmail($resetUrl, $this));
    }

    // Implement the methods from Authenticatable interface
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function news()
    {
        return $this->hasMany(News::class, 'created_by', 'id');
    }
}

