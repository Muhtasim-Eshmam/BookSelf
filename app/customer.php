<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = [
        'bookname', 'author','quantity','comment',
    ];
    
}
