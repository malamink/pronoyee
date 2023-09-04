<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writup extends Model
{
    use HasFactory;
    protected $table = 'writups';
    protected $fillable = [
        'id',
        'WritupTitle',
        'WriterName',
        'WritupCat',
        'WritupPublished',
        'WritupContent',
        'image',
        
    ];
}
 