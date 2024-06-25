<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'nationalty',
        'passId',
        'car_id',
        'fly_id',
        'attraction_id',
    ];

    public function Car(): HasOne
    {
        return $this->hasOne(Car::class, 'car_id', 'id');
    }
    public function Fly(): HasOne
    {
        return $this->hasOne(Car::class, 'fly_id', 'id');
    }
}
