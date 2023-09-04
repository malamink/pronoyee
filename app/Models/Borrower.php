<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    use HasFactory;
    protected $table = 'borrowers';
    protected $fillable = [
        'id',
        'BorrowedName', //user id or mobile number
        'BorrowedType',
        'CardNumber',
        'BookName', //book id
        'BorrowedFromDate',
        'BorrowedToDate',
        'ActualReturnDate',
        'IssuedBy', //staff id or liobrarian name
    ];
}


