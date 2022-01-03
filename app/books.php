<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = [
        'bookname',
    'author',
    'price',
    'type',
  'image_path',
    ];



    public function getImagePathAttribute($value)
    {
        if ($value)
        {
            return asset($value);
        }
    }

}
