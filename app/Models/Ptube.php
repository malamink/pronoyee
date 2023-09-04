<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptube extends Model
{
    use HasFactory;
    protected $table = 'ptubes';
    protected $fillable = [
        'id',
        'VidTitle',
        'VidCat',
        'Video',
    ];

}
