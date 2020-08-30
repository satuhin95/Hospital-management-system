<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PescriptionDetails extends Model
{
   protected $fillable = [
      'medicine','dose','suggestion', 'prescription_id', 
  ];
}
