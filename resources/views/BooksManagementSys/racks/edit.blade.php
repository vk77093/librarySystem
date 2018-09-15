@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
  <div class="w3-cell-row">
    <div class="w3-container w3-cell">
      <h4>Edit or delete the Racks</h4>
      {!!Form::model($racks,['method'=>'PATCH','action'=>['BooksRacksController@update',$racks->id]])!!}
      <div class="form-group">
        {!!Form::label('rack_name','Rack Name')!!}
        {!!Form::text('rack_name',null,['class'=>'form-control'])!!}
        <br />
        {!!Form::label('sub_racks','Sub Rack Name')!!}
        {!!Form::text('sub_racks',null,['class'=>'form-control'])!!}
        <br />
        {!!Form::label('rows','Enter Rack Rows Number:')!!}
        {!!Form::text('rows',null,['class'=>'form-control'])!!}
        <br />
        {!!Form::label('cols','Enter Rack  Cols Name:')!!}
        {!!Form::text('cols',null,['class'=>'form-control'])!!}

        {!!Form::submit('Update Racks',['class'=>'btn btn-primary col-sm-6'])!!}
      </div>

      {!!Form::open(['method'=>'DELETE','action'=>['BooksRacksController@destroy',$racks->id]])!!}
      {!!Form::submit('Delete Racks',['class'=>'btn btn-danger col-sm-6'])!!}
      {!!Form::close()!!}
    </div>
  </div>
</div>

@endsection
