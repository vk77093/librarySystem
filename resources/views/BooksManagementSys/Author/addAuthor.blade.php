@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
  <h4>Adding the Author</h4>
  <div class="w3-cell-row">
    <div class="w3-container w3-cell">
      {!!Form::open(['method'=>'POST','action'=>'BooksAuthorController@store'])!!}
      <div class="form-group">
        {!!Form::label('author_name','Category Name')!!}
        {!!Form::text('author_name',null,['class'=>'form-control'])!!}
      </div>
      <div class="form-group">
        {!!Form::submit('Create Author',['class'=>'form-control btn btn-primary'])!!}
      </div>

      {!!Form::close()!!}
  </div>

  <div class="w3-container w3-cell">
    <h4>View Author</h4>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Created_At</th>
        </tr>
      </thead>
      <tbody>
        @if($author)
        @foreach($author as $aut)
        <tr>
          <td>
<a    href="{{route('booksAuthor.edit',$aut->id)}}">{{$aut->id}}</a>
          </td>
          <td>{{$aut->author_name}}</td>
          <td>{{$aut->created_at ? $aut->created_at->diffForHumans() :'No Date'}}</td>

        </tr>
        @endforeach
        @endif
      </tbody>
    </table>
  </div>


  <!---End of row --->
  </div>
</div>
@endsection
