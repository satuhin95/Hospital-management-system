<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigAttendance extends Model
{
     protected $fillable = [
      'user_id','user_type',  'in_time','out_time', 'week_day',
  ];
}

