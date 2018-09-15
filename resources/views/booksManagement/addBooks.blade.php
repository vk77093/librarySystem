@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
<h4>Add Page for adding the Books</h4>
{!!Form::open(['method'=>'POST','action'=>'BookController@store'])!!}
<div class="form-group">
  {!!Form::label('title','TITLE:')!!}
  {!!Form::text('title',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('categories_id','Select category')!!}
  {!!Form::select('categories_id',[''=>'--Choose  Book category---']+$categories,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('rack_id','Select Rack')!!}
  {!!Form::select('rack_id',[''=>'--Choose Rack where You want to keep---']+$racks,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('author_id','Select Author')!!}
  {!!Form::select('author_id',[''=>'---Choose Author---']+$author,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('publisher_id','Select Publisher')!!}
  {!!Form::select('publisher_id',[''=>'--Choose Publisher--']+$publisher,null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('quantity','Enter The quantity')!!}
  {!!Form::number('quantity',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!form::submit('Add Books',['class'=>'form-control btn btn-primary'])!!}
</div>
{!!Form::close()!!}

</div>

@endsection
