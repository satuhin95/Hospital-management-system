<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
   protected $fillable = [
      'type','status', 'price','cat_id', 'bad_type_id', 'ward_id', 'description', 
  ];
}
