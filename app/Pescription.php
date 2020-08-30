<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pescription extends Model
{
   protected $fillable = [
      'patient_id','doctor_id',  'date','weight',  'height','bp',  'history','advice',  
  ];
}

