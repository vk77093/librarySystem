<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentName extends Model
{
    protected $fillable=[
      'stu_name',
      'father_name',
      'roll_number',
      'address',
    ];
}
