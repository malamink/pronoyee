<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Awardcat extends Model
{
    use HasFactory;
    protected $table = 'awardcats';
    protected $fillable = [
        'id',
        'AwardCat',
    ];


}
