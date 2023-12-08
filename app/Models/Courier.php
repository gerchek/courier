<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Contracts\Auth\Authenticatable;



class Courier extends Model implements Authenticatable
{
    use HasFactory;


    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'address',
        'city',
        'state',
        'phone_number',
        'salary',
        'used',
        'status',
        'ip_last_login',
        'payment_method',
        'pay_date',
        'last_entry_date',

    ];

    protected $casts = [
        'used' => 'array',
    ];

    // default 0=>Fresh синий цвет, 1=>Active зеленый, 2=>Problems Красный


    protected function status(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["fresh", "active","problems"][$value],
        );
    }

    public function parcel()
    {
        return $this->hasMany(Parcel::class);
    }

    public function getAuthIdentifierName()
    {
        return 'id'; // or the name of the identifier column in your courier table
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password; // or the name of the password column in your courier table
    }

    public function getRememberToken()
    {
        return $this->remember_token; // or the name of the remember token column in your courier table
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token'; // or the name of the remember token column in your courier table
    }

}
