@extends('welcome')
@section('content')
  <form action="" method="post" enctype="multipart/form-data">
 @csrf
	  <a href="{{'allpost'}}" class="btn btn-info">All Post</a>
<hr>



  <div class="form-group">
    <label for="inputAddress">Post Title</label>
    <input type="text" class="form-control" id="inputAddress" name="title" value="{{$post->title}}">
  </div>

  
  <div class="form-row">
<div class="form-group col-md-6">
      <label for="inputState">Catagory</label>
      <select id="inputState" class="form-control" name="catagory_id">
        @foreach($category as $row)
        <option value="{{$row->id}}"<?php if($row->id==$post->catagory_id) echo "selected";?>>{{$row->name}}</option>
        @endforeach
      </select>

    </div>

    
    
    <div class="form-group col-md-6">
      <label for="inputZip">Details</label>
      <input type="text" class="form-control" id="inputZip" name="details" value="{{$post->details}}">

    </div>
  </div>
   <div class="form-group">
    
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
    Old Image:<img src="{{URL::to($post->image)}}" style="height: 40px;width: 80px">
  </div>

  <button type="submit" class="btn btn-primary">Send</button>
</form>
@endsection