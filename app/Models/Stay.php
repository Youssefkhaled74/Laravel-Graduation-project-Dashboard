<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stay extends Model
{
    use HasFactory;
    
    protected $table ='stays';

    protected $fillable = [
        'name',
        'address',
        'photo',
        'price',
    ];

}
