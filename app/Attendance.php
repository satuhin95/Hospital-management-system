<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
     protected $fillable = [
      'user_id','date', 'in_time','out_time', 'has_ot', 'user_type', 'type', 
  ];
}
