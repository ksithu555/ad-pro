<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

class Admin extends Model implements UserContract
{
    use AuthenticatableTrait;

    // Define fillable and hidden attributes
    protected $fillable = ['role', 'name', 'email', 'password', 'status'];
    protected $hidden = ['password'];

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

