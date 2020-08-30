<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
      protected $fillable = [
      'name','email', 'address','contact',  'dob','type', 'gender','education', 'image', 
  ];
}


