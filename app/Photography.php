<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photography extends Model
{
     protected $fillable = [
  'newphoto',
   'Albumname',
    'description',
    'photoname'
   
];
}
