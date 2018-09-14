@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
<h4>Add Page for adding the Books</h4>
{!!Form::open(['method'=>'POST','action'=>'BookController@create'])!!}
<div class="form-group">
  {!!Form::label('title','TITLE:')!!}
  {!!Form::text('title',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('categories_id','Select category')!!}
  {!!Form::select('categories_id',array(1=>'Science',0=>'Social'),null,['class'=>'form-control'])!!}

</div>
{!!Form::close()!!}

</div>

@endsection
