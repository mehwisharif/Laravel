<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
class RegisterController extends Controller
{
    function signin(){
    	//echo "signin page";
    	return view('template/pages/signin');
    }

    public function postLogin(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email', 'password' => 'required',
        ]);
       $email=$request->input('email');
       $password=$request->input('password');

       if (Auth::attempt(['email' => $email, 'password' => $password])) 
       {
    return redirect('/');
       //echo "yes";
       }
        // $credentials = [
        // 'email'=>$email,
        // 'password'=>$password,
        // ];
        // if(Auth::attempt($credentials)){
        //   echo "yes";
          //return redirect('/');

        
       else
       {
        return redirect('signin');
        //echo "not found";
       }

        // return redirect($this->loginPath())
        //             ->withInput($request->only('email', 'remember'))
        //             ->withErrors([
        //                 'email' => $this->getFailedLoginMessage(),
        //             ]);
        //   //redirect again to login view with some errors line 3
    }
    function signup(){
    	//echo "signup page";
    	// $q=User::all();
    	//  print_r($q);

    	 return view('template/pages/signup');
    }
    function adduser(Request $request){
      $this->validate($request,[
      'email'=>'required',
        ]);
            $q=new User;
        $q->name=$request->input('name');
        $q->email=$request->input('email');
        $q->password=Hash::make($request->input('password'));
       // $q->retypepassword=$request->input('retypepassword');
        $q->save();
        //echo"user inserted";
    	

    	return view('template/pages/signup',compact('data'));
    }
    function allusers(){
    //echo "allusers";
      $this->data='';

      @$this->data->post=User::all();
      @$this->data->pageTitle='Show All Users';
      
      @$data=(array)$this->data;
    return view('template/pages/allusers',compact('data'));
   }
   function deluser($id){
    $q=User::find($id);
    $q->delete();
    return redirect()->back();

   }
   function edituser($id){
    @$this->data->post=User::find($id);
    @$data=(array)$this->data;
    return view('template/pages/edituser',compact('data'));
  }
  function updateuser(Request $request){
    $id=$request->input('id');
    $q=User::find($id);
    $q->name=$request->input('name');
    $q->email=$request->input('email');
    $q->password=$request->input('password');
    $q->update();
    return redirect()->action('RegisterController@allusers');
  }
  public function logout(Request $request)
  {
    Auth::logout();
    return redirect('/');
  }
}
