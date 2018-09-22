@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
<h4>Index Page for view of Issue Books</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Book Name</th>
      <th>Student Id</th>
      <th>Student Name</th>
      <th>Roll Number</th>
      <th>Rack</th>
      <th>Publisher</th>
      <th>Return Date</th>
      <th>Issue Date</th>
      <th>Quantity Issue</th>
      <th>Pending Quantity</th>
    </tr>
  </thead>
  <tbody>
    @if($issueBooks)
    @foreach($issueBooks as $books)
    <tr>
     <td>{{$books->id}}</td>
     <td>{{$books->book->title}}</td>
     <td>{{$books->student_id}}</td>
     <td>{{$books->student->stu_name}}</td>
     <td>{{$books->student->roll_number}}</td>
     <td>{{$books->rack->rack_name}}</td>
     <td>{{$books->publisher->publisher_name}}</td>
     <td>{{$books->return_date}}</td>
     <td>{{$books->created_at}}</td>
     <td>{{$books->qunatity_issue}}</td>
     <td> Some Dummy Quantity-Issue</td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
</div>
@endsection
