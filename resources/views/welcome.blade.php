@extends('includes/bootstrap')
@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{asset('/css/myStyle.css')}}" />
@endsection
@section('content')
<div class="container myside">
  <p class="lead">
    Welcome to the Library Management system
    <a href="/login"><p class="lead">LogIn</a>

    </p>
  </p>

</div>

@endsection
