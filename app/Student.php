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
    public function StudentName(){
      return $this->belongsTo('App\StudentName','students_name_id');
    }
    public function stuClass(){
      return $this->belongsTo('App\StudentClass','students_class_id');
    }
}
