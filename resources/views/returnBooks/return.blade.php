@extends('includes/sidebar')
@include('includes/bootstrap')

@section('content')

<div class="w3-main" style="margin-left:310px;margin-top:43px;">
<h4>Return Books Here from Student</h4>


{!!Form::open(['method'=>'POST','action'=>'BookReturnController@store'])!!}

<div class="form-group">

  {!!Form::label('book_id','Select Book Name')!!}

  {!!Form::select('book_id',[''=>'--Choose Book Name--']+$bookNames,null,['class'=>'form-control'])!!}

</div>


<div class="form-group">
  {!!Form::label('student_id','Select Student ID')!!}
  {!!Form::select('student_id',[''=>'--Choose Student ID Name--']+$studenID,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('stu_name','Select Student Name')!!}
  {!!Form::select('stu_name',[''=>'--Choose Student Name Name--']+$stuName,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('roll_num_id','Select Student Roll Number')!!}
  {!!Form::select('roll_num_id',[''=>'--Choose Student Roll Number Name--']+$stuRoll,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('publisher_id','Select Student Roll Number')!!}
  {!!Form::select('publisher_id',[''=>'--Choose Publisher Name--']+$pubName,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('return_date','Select Return date')!!}
  {!!Form::select('return_date',[''=>'--Choose Return Date--']+$returnDate,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::submit('Return Back Book',['class'=>'btn btn-primary form-control'])!!}
</div>
{!!Form::close()!!}


</div>
@endsection
