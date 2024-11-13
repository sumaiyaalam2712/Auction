<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    public function user()
    {
        return $this->belongsTo(Car::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}