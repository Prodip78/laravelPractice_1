<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class student extends Controller
{
    public function contact(){
    	return view('pages.contact');
    }
public function about(){
    	return view('pages.about');
    }
public function student(){
    	return view('pages.student');
    }


public function addCategory(){
	return view('pages.add_category');
}

public function storeCatrgory(Request $request){
	$data=array();
	$data['name']=$request->name;
	$data['slug']=$request->slug;

	DB::table('catagories')->insert($data);
	return view('pages.add_category');

}
public function allCategory(){
	$category = DB::table('catagories')
				->get();
				return view('pages.allCategory',compact('category'));
}

public function viewCategory($id){
	$category=DB::table('catagories')
						->where('id',$id)->first();

	return view('pages.viewCategory',compact('category'));
}

public function DeleteCategory($id){
	 $delete=DB::table('catagories')
					->where('id',$id)->delete();
	 					return view('pages.add_category',compact('delete'));

}
public function EditCategory($id){
	$category=DB::table('catagories')
	              ->where('id',$id)->first();
	              return view('pages.EditCategory',compact('category'));

}

public function UpdateCategory(Request $request,$id){
$data=array();
	$data['name']=$request->name;
	$data['slug']=$request->slug;

	$category=DB::table('catagories')->where('id',$id)->update($data);
	//return view('pages.EditCategory',compact('category'));
	return view('pages.add_Category');
}

}
