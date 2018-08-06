<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Auth;
use DB;
class PostController extends Controller
{
	function post(){
		@$this->data->user=Auth::User();
           $data=(array)$this->data;
		return view('template/pages/addpost',compact('data'));
	}

	function savepost(Request $request)
{
    $this->validate($request,[
        'title' => 'required',
        'content' => 'required',
    ]);

    // The blog post is valid...

		$q=new post();
		if(!empty($request->file('image'))){
			$file=$request->file('image');
			$destination='uploads/images';
			$orgname=$file->getClientOriginalName();
			$file->move($destination,$file->getClientOriginalName());
			$q->image=$orgname;
		}
		$q->title=$request->input('title');
		$q->content=$request->input('content');
		$q->categories=$request->input('category');
		$q->save();
		//echo "record inserted";

		return redirect()->action('PostController@allpost');
	}
	function allpost(){
		$this->data='';
		//@$this->data->post=post::all();


		@$this->data->post=DB::table('post')
		->join('categories','post.categories','=','categories.id')
		->get();



		@$this->data->pagetitle='show all posts';
		@$data=(array)$this->data;
		//print_r($data);
		return view('template/pages/allpost',compact('data'));
	}
	function delpost($id){
		$q=post::find($id);
		$q->delete();
		return redirect()->back();
	}
	
	function editpost($id){
		@$this->data->post=post::find($id);
		@$data=(array)$this->data;
		return view('template/pages/editpost',compact('data'));


	}

function updatepost(Request $request){
	    $id=$request->input('id');
		$q=post::find($id);
		$q->title=$request->input('title');
		$q->content=$request->input('content');
		if(!empty($request->file('image'))){
			$file=$request->file('image');
			$destination='uploads/images';
			$orgname=$file->getClientOriginalName();
			$file->move($destination,$file->getClientOriginalName());
			$q->image=$orgname;
		}
		//$q->image=$request->input('image');
		$q->categories=$request->input('category');
		$q->update();
		return redirect()->action('PostController@allpost');

	}


	


}