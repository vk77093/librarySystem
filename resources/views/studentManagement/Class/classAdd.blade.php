@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
  <h4>Adding the Student Class</h4>
  <div class="w3-cell-row">
    <div class="w3-container w3-cell">
      {!!Form::open(['method'=>'POST','action'=>'StudentClassController@store'])!!}
      <div class="form-group">
        {!!Form::label('class_name','Class Name')!!}
        {!!Form::text('class_name',null,['class'=>'form-control'])!!}
      </div>
      <div class="form-group">
        {!!Form::label('section_name','Section Name')!!}
        {!!Form::text('section_name',null,['class'=>'form-control'])!!}
      </div>
      <div class="form-group">
        {!!Form::submit('Create Class',['class'=>'form-control btn btn-primary'])!!}
      </div>
    </div>

    <div class="w3-container w3-cell">
<h4>View Class</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Class</th>
        <th>Section</th>
      <th>Created_At</th>
    </tr>
  </thead>
  <tbody>
    @if($stu_class)
    @foreach($stu_class as $class)
    <tr>
      <td><a href="{{route('studentClass.edit',$class->id)}}">{{$class->id}}</a></td>
      <td>{{$class->class_name}}</td>
      <td>{{$class->section_name}}</td>
      <td>{{$class->created_at ? $class->created_at->diffForHumans():'No Date'}}</td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
    </div>

  </div>
</div>
@endsection
