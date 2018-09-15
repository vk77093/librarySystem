<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
      'students_class_id',
      'students_name_id',
      'contact_number',
    ];
}
