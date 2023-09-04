<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    use HasFactory;
    protected $table = 'communications';
    protected $fillable = [
        'id',
        'name',
        'email',
        'subject',
        'message',
    ];
}
 