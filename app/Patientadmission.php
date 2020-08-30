<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patientadmission extends Model
{
   protected $fillable = [
      'admission_fee','bed_id','patient_id','admission_date','release_date','reference_doctor',  
  ];
}

