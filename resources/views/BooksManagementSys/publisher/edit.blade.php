@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
  <div class="w3-cell-row">
    <div class="w3-container w3-cell">
      <h4>Edit or delete The Publisher</h4>
      {!!Form::model($publisher,['method'=>'PATCH','action'=>['BooksPublisherController@update',$publisher->id]])!!}
      <div class="form-group">
        {!!Form::label('publisher_name','Publisher Name:')!!}
        {!!Form::text('publisher_name',null,['class'=>'form-control'])!!}
        {!!Form::submit('Update Publisher',['class'=>'btn btn-primary col-sm-6'])!!}
         {!!Form::close()!!}
      </div>
      {!!Form::open(['method'=>'DELETE','action'=>['BooksPublisherController@destroy',$publisher->id]])!!}
      {!!Form::Submit('Delete Publisher',['class'=>'btn btn-danger col-sm-6'])!!}
      {!!Form::close()!!}
    </div>
  </div>
</div>
@endsection
