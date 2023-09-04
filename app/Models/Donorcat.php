<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donorcat extends Model
{
    use HasFactory;
    protected $table = 'donorcats';
    protected $fillable = [
        'id',
        'DonorCatName',
    ];

     
}
