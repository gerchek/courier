<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Parcel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'courier_id',

        'name',
        'description',
        'shipping_company',
        'tracking_number',
        'file',
        'status',

    ];

    // default 0=>Task Received, 1=>Package Received, 2=>Package Shipped

    protected function status(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["task_received", "package_received","package_shipped"][$value],
        );
    }

    public function courier()
    {
        return $this->belongsTo(Courier::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    

}
