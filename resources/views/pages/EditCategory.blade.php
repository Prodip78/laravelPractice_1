@extends('welcome')
@section('content')
  <form action="{{url('UpdateCategory'.$category->id)}}" method="post">
@csrf
	<a href="{{'addCategory'}}" class="btn btn-danger">Add Category</a>
	<a href="{{'allCategory'}}" class="btn btn-info">All Category</a>
<hr>



  <div class="form-group col-md-6">
      <label for="inputZip">Post Title</label>
      <input type="text" class="form-control" id="inputZip" name="name" value="{{$category->name}}">
  

      <label for="inputZip">Slug Name</label>
      <input type="text" class="form-control" id="inputZip" name="slug" value="{{$category->slug}}">
    

  
  </div>

  
  
 
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection