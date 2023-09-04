<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeperiod extends Model
{
    use HasFactory; 
    protected $table = 'timeperiods';
    protected $fillable = [
        'id',
        'PeriodName',
    ];
}
