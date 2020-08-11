@extends('welcome')
@section('content')
  
	<a href="{{'addCategory'}}" class="btn btn-danger">Add Category</a>
	<a href="{{'allCategory'}}" class="btn btn-info">All Category</a>
<hr>

<div>
  
    <p>Category Name: {{$post->name}}</p>
    <h3>{{$post->title}}</h3>
    <img src="{{URL::to($post->image)}}">
    <p>{{$post->details}}</p>

  
</div>


@endsection