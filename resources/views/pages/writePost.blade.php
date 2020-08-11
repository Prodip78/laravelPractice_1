@extends('welcome')
@section('content')
  <form action="{{'StorePost'}}" method="post" enctype="multipart/form-data">
 @csrf
	<a href="{{'addCategory'}}" class="btn btn-danger">Add Category</a>
	<a href="{{'allCategory'}}" class="btn btn-info">All Category</a>
  <a href="{{'allpost'}}" class="btn btn-info">All Post</a>
<hr>



  <div class="form-group">
    <label for="inputAddress">Post Title</label>
    <input type="text" class="form-control" id="inputAddress" name="title" placeholder="1234 Main St">
  </div>

  
  <div class="form-row">
<div class="form-group col-md-6">
      <label for="inputState">Catagory</label>
      <select id="inputState" class="form-control" name="catagory_id">
        @foreach($category as $row)
        
        <option value="{{$row->id}}">{{$row->name}}</option>
        @endforeach
      </select>

    </div>

    
    
    <div class="form-group col-md-6">
      <label for="inputZip">Details</label>
      <input type="text" class="form-control" id="inputZip" name="details">
    </div>
  </div>
   <div class="form-group">
    
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>

  <button type="submit" class="btn btn-primary">Send</button>
</form>
@endsection