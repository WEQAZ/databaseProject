<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'username', 
        'firstname', 
        'lastname', 
        'email', 
        'password', 
        'gender', 
        'age',
    ];

    public function member(): HasOne
    {
        return $this->hasOne(Member::class);
    }

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
