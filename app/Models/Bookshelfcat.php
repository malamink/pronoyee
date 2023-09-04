<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookshelfcat extends Model
{
    use HasFactory;
    protected $table = 'bookshelfcats';
    protected $fillable = [
        'id',
        'BookShelfCatName',
    ];
}
 