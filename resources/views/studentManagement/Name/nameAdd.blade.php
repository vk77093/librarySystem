@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
<h4>Adding the Student Name</h4>
<div class="w3-cell-row">
  <div class="w3-container w3-cell">
    {!!Form::open(['method'=>'POST','action'=>'StudentNameController@store'])!!}
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
      {!!Form::submit('Create Student Name',['class'=>'btn btn-primary form-control'])!!}
    </div>
  </div>

  <div class="w3-container w3-cell">
    <h4>View Names</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Father Name</th>
      <th>Roll Number</th>
      <th>Address</th>
      <th>created_at</th>
    </tr>
  </thead>
  <tbody>
    @if($stuName)
    @foreach($stuName as $names)
    <tr>
      <td><a href="{{route('studentName.edit',$names->id)}}">{{$names->id}}</a></td>
      <td>{{$names->stu_name}}</td>
      <td>{{$names->father_name}}</td>
      <td>{{$names->roll_number}}</td>
      <td>{{$names->address}}</td>
      <td>{{$names->created_at ? $names->created_at->diffForHumans() :'No Date'}}</td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
  </div>
</div>
</div>
@endsection
