<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fly extends Model
{
    use HasFactory;

    protected $table =  'flying';
    

    protected $fillable = [
        'name',
        'price',
        'descrition',
        'degree',
        'go',
        'back',
        'photo',
    ];
}
