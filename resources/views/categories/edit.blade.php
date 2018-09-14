@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">

<h4>Edit or DELETE Category</h4>
<div class="row">
  <div class="col-sm-6">
    {!!Form::model($categories,['method'=>'PATCH','action'=>['BookCategories@update',$categories->id]])!!}
    <div class="form-group">
      {!!Form::label('cat_name','NAME:')!!}
      {!!Form::text('cat_name',null,['class'=>'form-control'])!!}
      {!!Form::submit('Update_categories',['class'=>'btn btn-primary col-sm-6'])!!}
       {!!Form::close()!!}

    {!!Form::open(['method'=>'DELETE','action'=>['BookCategories@destroy',$categories->id]])!!}
    {!!Form::Submit('Delete Post',['class'=>'btn btn-danger col-sm-6'])!!}
    {!!Form::close()!!}
  </div>
  </div>

</div>


@endsection

</div>
