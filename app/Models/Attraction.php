<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    use HasFactory;

    protected $table = 'attractions';

    protected $fillable = [
        'name',
        'description',
        'date',
        'price',
    ];

    public function Attractions(){
        return $this->belongsToMany(Attraction::class , 'attraction__customer_pivot');
    }
}
