@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
<h4>Index Page for view</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Student Name</th>
      <th>Student Class</th>
      <th>Contact Number</th>
      <th>Created_At</th>
    </tr>
  </thead>
  <tbody>
    @if($students)
    @foreach($students as $student)
    <tr>
      <th>{{$student->id}}</th>
  <th>{{$student->StudentName->stu_name}}</th>
      <th>{{$student->stuClass->class_name}}</th>
      <th>{{$student->contact_number}}</th>
      <th>{{$student->created_at ? $student->created_at->diffForHumans() :'No Date'}}</th>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
</div>
@endsection
