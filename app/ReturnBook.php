<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnBook extends Model
{
    protected $fillable=[
      'return_id',
      'id',
      'book_id',
      'student_id',
      'stu_name',
      'publisher_id',
      'roll_number',
      'return_date',
    ];
}
