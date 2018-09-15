@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
  <div class="w3-cell-row">
    <div class="w3-container w3-cell">
      <h4>Edit or delete The Author</h4>
      {!!Form::model($author,['method'=>'PATCH','action'=>['BooksAuthorController@update',$author->id]])!!}
      <div class="form-group">
        {!!Form::label('author_name','NAME:')!!}
        {!!Form::text('author_name',null,['class'=>'form-control'])!!}
        {!!Form::submit('Update_Author',['class'=>'btn btn-primary col-sm-6'])!!}
         {!!Form::close()!!}
</div>
         {!!Form::open(['method'=>'DELETE','action'=>['BooksAuthorController@destroy',$author->id]])!!}
         {!!Form::Submit('Delete Author',['class'=>'btn btn-danger col-sm-6'])!!}
         {!!Form::close()!!}
      </div>

    </div>

      @endsection
</div>
