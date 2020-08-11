@extends('welcome')
@section('content')


  <a href="{{'writePost'}}" class="btn btn-info">Write POst</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Category </th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($post as $view)
  <tbody>
    <tr>
      <th scope="row">{{$view->id}}</th>
      <td>{{$view->name}}</td>
      <td>{{$view->title}}</td>
      <td><img src="{{URL::to($view->image)}}" style="height:40px;width: 80px; "></td>
      <td>
        <a href="{{'EditPost'.$view->id}}" class="btn btn-info">Edit</a>
        <a href="{{URL::to('DeletePost'.$view->id)}}" class="btn btn-danger">Delete</a>
        <a href="{{'viewPost'.$view->id}}" class="btn btn-success">View</a>

      </td>
    </tr>
      </tbody>
      @endforeach
</table>
@endsection