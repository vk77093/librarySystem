<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $fillable=[
      'class_name',
      'section_name',
    ];
}
