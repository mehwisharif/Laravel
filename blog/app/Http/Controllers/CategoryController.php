<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Auth;
class CategoryController extends Controller
{
	function categories(){
		@$this->data->user=Auth::User();
           $data=(array)$this->data;
		
	return view('template/pages/categories',compact('data'));
	}
	function SaveCat(Request $request){
		$this->validate($request,[
        'categories' => 'required',
        
    ]);
		$q=new category();
		$q->categories=$request->input('categories');
		$q->save();
		//echo "record inserted";



		
    return view('template/pages/categories',compact('data'));
	}
	function allcategories(){
		$this->data='';
		@$this->data->post=category::all();
		@$this->data->pagetitle='show all categories';
		@$data=(array)$this->data;
		//print_r($data);
		
		return view('template/pages/allcategories',compact('data'));
	}
	function delcat($id){
		$q=category::find($id);
		$q->delete();
		return redirect()->back();
	}
	function editcat($id){
		@$this->data->post=category::find($id);
		@$data=(array)$this->data;
		return view('template/pages/editcat',compact('data'));
	}
	function updatecat(Request $request){
		$id=$request->input('id');
		$q=category::find($id);
		$q->categories=$request->input('categories');
		$q->update();
		return redirect()->action('CategoryController@allcategories');
	}
    //
    
}

