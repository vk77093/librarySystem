<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnBook extends Model
{
    protected $fillable=[
      'id',
      'issue_books_id',
      'book_id',
      'student_id',
      'stu_name',
      'publisher_id',
      'roll_number',
      'return_date',
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
    public function issueBooks(){
      return $this->belongsTo('App\IssueBook','return_date');
    }

}
