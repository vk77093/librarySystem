@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
<h4>Issue Books here to student</h4>
{!!Form::open(['method'=>'POST','action'=>'BookIssueController@store'])!!}
<div class="form-group">
  {!!Form::label('book_id','Select Book Name')!!}
  {!!Form::select('book_id',[''=>'--Chhose Book Name--']+$bookName,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('student_id','Select Student Id:')!!}
  {!!Form::select('student_id',[''=>'---Select Student Id--']+$studentId,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('stu_name','Select Student Name:')!!}
  {!!Form::select('stu_name',[''=>'--Select Student Name--']+$studentName,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('roll_id','Select Student roll Numner')!!}
  {!!Form::select('roll_id',[''=>'--Select Roll Number---']+$studentRollNum,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('rack_id','Select Rack Number')!!}
  {!!Form::select('rack_id',[''=>'--Select Rack Name---']+$rackName,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('publisher_id','Select Publisher Name')!!}
  {!!Form::select('publisher_id',[''=>'--select Publisher Name---']+$publisherName,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('return_date','Select Return date')!!}
  {!!Form::date('return_date',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('qunatity_issue','Enter The Quantity Given')!!}
  {!!Form::number('qunatity_issue',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::submit('Issue Book',['class'=>'btn btn-primary form-control'])!!}
</div>
</div>
@endsection
