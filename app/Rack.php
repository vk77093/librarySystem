<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
  protected $fillable=[
    'rack_name',
    'sub_racks',
    'rows',
    'cols',
  ];
}
