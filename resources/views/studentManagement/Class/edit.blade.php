@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
  <div class="w3-cell-row">
    <div class="w3-container w3-cell">
      <h4>Edit or Delete the Class</h4>
      {!!Form::model($stu_class,['method'=>'PATCH','action'=>['StudentClassController@update',$stu_class->id]])!!}
      <div class="form-group">
        {!!Form::label('class_name','Class Name')!!}
        {!!Form::text('class_name',null,['class'=>'form-control'])!!}
        {!!Form::label('section_name','Section Name:')!!}
        {!!Form::text('section_name',null,['class'=>'form-control'])!!}
        {!!Form::submit('Update BOTH',['class'=>'btn btn-primary col-sm-6'])!!}
        {!!Form::close()!!}
      </div>
      {!!Form::open(['method'=>'DELETE','action'=>['StudentClassController@destroy',$stu_class->id]])!!}
      {!!Form::submit('Delete Both',['class'=>'btn btn-danger col-sm-6'])!!}
      {!!Form::close()!!}
    </div>
  </div>
</div>
@endsection
