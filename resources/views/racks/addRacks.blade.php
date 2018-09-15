@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
  <h4>Adding the racks</h4>
  <div class="w3-cell-row">

    <div class="w3-container w3-cell">
{!!Form::open(['method'=>'POST','action'=>'BooksRacksController@store'])!!}
<div class="form-group">
  {!!Form::label('rack_name','Enter Rack Name:')!!}
  {!!Form::text('rack_name',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('sub_racks','Enter Sub_Racks')!!}
  {!!Form::text('sub_racks',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::submit('Create Racks',['class'=>'form-control btn btn-primary'])!!}
</div>
{!!Form::close()!!}
    </div>

    <div class="w3-container w3-cell">
<h4>View Racks</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Racks Name</th>
      <th>Sub Racks</th>
      <th>Created_At</th>
    </tr>
  </thead>
  <tbody>
    @if($racks)
    @foreach($racks as $rack)
    <tr>
      <th><a href="{{route('booksRacks.edit',$rack->id)}}">{{$rack->id}}</a></th>
      <th>{{$rack->rack_name}}</th>
      <th>{{$rack->sub_racks}}</th>
      <th>{{$rack->created_at ? $rack->created_at->diffForHumans():'No Date'}}</th>
    </tr>


    @endforeach
    @endif
  </tbody>
</table>
    </div>
  </div>

</div>
@endsection
