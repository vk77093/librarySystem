@extends('includes/sidebar')
@include('includes/bootstrap')
@section('content')
<div class="w3-main" style="margin-left:310px;margin-top:43px;">
<div class="row">


<div class="col-sm-6">

<h4>Create Category</h4>
{!!Form::open(['method'=>'POST','action'=>'BookCategories@store'])!!}
<div class="form-group">
  {!!Form::label('cat_name','Category Name')!!}
  {!!Form::text('cat_name',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::submit('Create Category',['class'=>'form-control btn btn-primary'])!!}
</div>

{!!Form::close()!!}

</div>
</div>
<div class="col-sm-6">
<h4>View Category</h4>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Created_At</th>
    </tr>
  </thead>
  <tbody>
    @if($categories)
    @foreach($categories as $cat)
    <tr>
      <td><a href="{{route('bookCategories.edit',$cat->id)}}">
    {{$cat->id}}</td></a>
      <td>{{$cat->cat_name}}</td>
      <td>{{$cat->created_at ? $cat->created_at->diffForHumans() :'No Date'}}</td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
</div>
</div>

@endsection
