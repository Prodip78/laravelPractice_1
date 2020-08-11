@extends('welcome')
@section('content')

<a href="{{'addCategory'}}" class="btn btn-danger">Add Category</a>
  <a href="{{'allCategory'}}" class="btn btn-info">All Category</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Category Name</th>
      <th scope="col">Slug Name</th>
      <th scope="col">Created At</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($category as $view)
  <tbody>
    <tr>
      <th scope="row">{{$view->id}}</th>
      <td>{{$view->name}}</td>
      <td>{{$view->slug}}</td>
      <td>{{$view->created_at}}</td>
      <td>
        <a href="{{'EditCategory'.$view->id}}" class="btn btn-info">Edit</a>
        <a href="{{URL::to('DeleteCategory'.$view->id)}}" class="btn btn-danger">Delete</a>
        <a href="{{'viewCategory'.$view->id}}" class="btn btn-success">View</a>

      </td>
    </tr>
      </tbody>
      @endforeach
</table>
@endsection