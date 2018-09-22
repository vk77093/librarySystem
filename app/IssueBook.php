<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssueBook extends Model
{
    protected $fillable=[
      'book_id',
      'student_id',
      'stu_name',
      'roll_id',
      'rack_id',
      'publisher_id',
      'return_date',
      'qunatity_issue',
    ];
    public function book(){
      return $this->belongsTo('App\Books');
    }
    public function student(){
      return $this->belongsTo('App\StudentName');
    }
    public function studentRoll(){
      return $this->belongsTo('App\StudentName','roll_number');
    }
    public function rack(){
      return $this->belongsTo('App\Rack');
    }
    public function publisher(){
      return $this->belongsTo('App\Publisher');
    }
}
