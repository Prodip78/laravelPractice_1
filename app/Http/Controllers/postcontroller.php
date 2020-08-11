<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class postcontroller extends Controller
{
    public function writePost(){
    	$category =DB::table('catagories')->get();
	return view('pages.writePost',compact('category'));
}

public function StorePost(Request $request){

$data=array();
$data['title']=$request->title;
$data['catagory_id']=$request->catagory_id;
$data['details']=$request->details;
$image=$request->file('image');


if ($image) {
	$image_name=hexdec(uniqid());
	$ext=strtolower($image->getClientOriginalExtension());
	$image_full_name=$image_name.'.'.$ext;
	$upload_path ='public/frontend/image/';
	$image_url=$upload_path.$image_full_name;
	$sucess=$image->move($upload_path,$image_full_name);
	$data['image']=$image_url;

	$cat=DB::table('posts')->insert($data);
	return view('pages.add_category',compact('cat'));
	
}else{
$cat=DB::table('posts')->insert($data);

return view('pages.add_category',compact('cat'));


}


}

public function allpost(){

	//$post=DB::table('posts')->get();
$post=DB::table('posts')->join('catagories','posts.catagory_id','catagories.id')
      ->select('posts.*','catagories.name')
      ->get();

	return view('pages.allpost',compact('post'));
}

public function viewPost($id){

$post=DB::table('posts')->join('catagories','posts.catagory_id','catagories.id')
      ->select('posts.*','catagories.name')
      ->where('posts.id',$id)
      ->first();

	return view('pages.viewPost',compact('post'));

}

public function EditPost($id){

    $category=DB::table('catagories')->where('id',$id)->get();
	$post=DB::table('posts')->where('id',$id)->first();
	return view('pages.EditPost',compact('post','category'));
}

public function index(){
$post =DB::table('posts')->join('catagories','posts.catagory_id','catagories.id')
    ->select('posts.*','catagories.name','catagories.slug')->paginate(2);
    return view('pages.index',compact('post'));


}



}
