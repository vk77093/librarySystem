@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
<h4>Index Page for view</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Book Id</th>
      <th>Category</th>
      <th>Author</th>
      <th>TITLE</th>
      <th>Rack</th>
      <th>Publisher</th>
      <th>Quantity</th>
      <th>Created_At</th>
    </tr>
  </thead>
  <tbody>
    @if($books)
    @foreach($books as $book)
    <tr>
      <td>{{$book->id}}</td>
      <td>{{$book->categories->cat_name}}</td>
      <td>{{$book->author->author_name}}</td>
      <td>{{$book->title}}</td>
      <td>{{$book->rack->rack_name}}</td>
      <td>{{$book->publisher->publisher_name}}</td>
      <td>{{$book->quantity}}</td>
      <td>{{$book->created_at ? $book->created_at->diffForHumans() :'No Date'}}</td>

    </tr>
    @endforeach
    @endif
  </tbody>
</table>
</div>

@endsection
