<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
   protected $fillable = [
      'name','age',  'address','contact',  'gender','reg_date',  'chief_complain','type',  'email',
  ];
}

