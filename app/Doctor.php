<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
   protected $fillable = [
      'name', 'email', 'address', 'contact', 'dob','fees', 'image', 'gender', 'qualification','designation', 
  ];
}
