<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmecat extends Model
{
    use HasFactory;
    protected $table = 'programmecats';
    protected $fillable = [
    'id',
    'ProgCatName',
];


}
