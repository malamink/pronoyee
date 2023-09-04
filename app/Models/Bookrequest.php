<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookrequest extends Model
{
    use HasFactory;  
    protected $table = 'bookrequests';
    protected $fillable = [
        'id',
        'name',
        'phone',
        'email',
        'message',
    ];
}
