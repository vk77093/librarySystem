@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
<h4>Index Page for view of Return Books</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Book Name</th>
      <th>Student Id</th>
      <th>Student Name</th>
      <th>Roll Number</th>
      <th>Publisher</th>
      <th>Return Date</th>
      <th>Take Date</th>

    </tr>
  </thead>
  @if($returnBook)
  @foreach($returnBook as $books)
  <tbody>
    <tr>
      <td>{{$books->id}}</td>
      <td>{{$books->book->title}}</td>
      <td>{{$books->student_id}}</td>
      <td>{{$books->student->stu_name}}</td>
      <td>{{$books->studentRoll->roll_number}}</td>
      <td>{{$books->publisher->publisher_name}}</td>
      <td>{{$books->issueBooks->return_date}}</td>
      <td>{{$books->created_at}}</td>
    </tr>

  </tbody>
  @endforeach
  @endif
</table>
</div>
@endsection
