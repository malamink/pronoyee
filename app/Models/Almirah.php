<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almirah extends Model
{
    use HasFactory;
    protected $table = 'almirahs';
    protected $fillable = [
        'id',
        'AlmirahName',
    ];
}
