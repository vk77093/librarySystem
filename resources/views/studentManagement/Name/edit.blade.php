@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
<div class="w3-cell-row">
<div class="w3-container w3-cell">
  <h4>Edit or Delete the Names</h4>
  {!!Form::model($stuName,['method'=>'PATCH','action'=>['StudentNameController@update',$stuName->id]])!!}
  <div class="form-group">
    {!!Form::label('stu_name','Student Name:')!!}
    {!!form::text('stu_name',null,['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('father_name','Student Father Name')!!}
    {!!Form::text('father_name',null,['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('roll_number','Roll Number')!!}
    {!!form::number('roll_number',null,['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('address','Enter The Address')!!}
    {!!Form::text('address',null,['class'=>'form-control'])!!}
  </div>
  <div class="form-group">
    {!!Form::submit('Update Student Name',['class'=>'btn btn-primary form-control col-sm-6'])!!}
  </div>
  {!!Form::close()!!}

  {!!Form::open(['method'=>'DELETE','action'=>['StudentNameController@destroy',$stuName->id]])!!}
  <div class="form-group">
    {!!Form::submit('Delete Name:',['class'=>'btn btn-danger form-control col-sm-6'])!!}

  </div>
  {!!Form::close()!!}

</div>

</div>
</div>
@endsection
