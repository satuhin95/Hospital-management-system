<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientTest extends Model
{
   protected $fillable = [
      'patient_id','test_id', 'test_date', 
  ];
}
