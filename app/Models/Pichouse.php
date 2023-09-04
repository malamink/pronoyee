<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pichouse extends Model 
{
    use HasFactory;
    protected $table = 'pichouses';
    protected $fillable = [
        'id',
        'PicTitle',
        'PicCat',
        'image',
    ];

}
