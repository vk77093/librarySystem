@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
  <h4>Add page for Adding the Student</h4>
  {!!Form::open(['method'=>'POST','action'=>'StudentController@store'])!!}
  <div class="form-group">
    {!!Form::label('students_name_id','Select Student Name:')!!}
    {!!Form::select('students_name_id',[''=>'--Choose Student Name---']+$stuName,null,['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('students_class_id','Select Student Class:')!!}
    {!!Form::select('students_class_id',[''=>'--Choose Student Class--']+$stuClass,null,['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('contact_number','Contact Number:')!!}
    {!!Form::number('contact_number',null,['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
    {!!Form::submit('Create Student',['class'=>'btn btn-primary form-control'])!!}
  </div>

</div>
@endsection
