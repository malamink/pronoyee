<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;
    protected $table = 'writers';
    protected $fillable = [
        'id',
        'wNameBn',
        'wNameEn',
        'CountryName',
        'StateName',
        'CityName',
        'BirthPlace',
        'Language',
        'wTperiod',
        'wDbirth',
        'image',
        'wBiography'
    ];
}
  