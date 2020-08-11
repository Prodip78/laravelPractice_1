@extends('welcome')
@section('content')
  
	<a href="{{'addCategory'}}" class="btn btn-danger">Add Category</a>
	<a href="{{'allCategory'}}" class="btn btn-info">All Category</a>
<hr>

<div>
  <ol>
    <li>Category Name: {{$category->name}}</li>
    <li>Slug Name: {{$category->slug}}</li>
    <li>Created At: {{$category->created_at}}</li>

  </ol>

</div>


@endsection