@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
  <h4>Adding The Publisher</h4>
  <div class="w3-cell-row">
    <div class="w3-container w3-cell">
{!!Form::open(['method'=>'POST','action'=>'BooksPublisherController@store'])!!}
<div class="form-group">
  {!!Form::label('publisher_name','Publisher Name:')!!}
  {!!Form::text('publisher_name',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::submit('Create Publisher',['class'=>'form-control btn btn-primary'])!!}
</div>
{!!Form::close()!!}
    </div>

    <div class="w3-container w3-cell">
      <h4>View Publisher</h4>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created_At</th>
          </tr>
        </thead>
        <tbody>
          @if($publishers)
          @foreach($publishers as $publisher)
          <tr>
            <td><a href="{{route('booksPublisher.edit',$publisher->id)}}">{{$publisher->id}}</a></td>
            <td>{{$publisher->publisher_name}}</td>
            <td>{{$publisher->created_at ? $publisher->created_at->diffForHumans():'No Date:'}}</td>
          </tr>
          @endforeach
          @endif
          </tbody>
          </table>
    </div>
  </div>
</div>
@endsection
