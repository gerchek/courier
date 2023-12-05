<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;



class Courier extends Model
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

}
