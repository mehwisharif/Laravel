<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class PageController extends Controller
{
   function index(){
   //echo "index page";
      @$this->data->user=Auth::User();
      $data=(array)$this->data;
   return view('template/pages/index',compact('data'));
   }
   function home(){
      @$this->data->user=Auth::User();
      $data=(array)$this->data;
   return view('template/pages/index',compact('data'));
   }
   function about(){
   //echo "about us page";
      @$this->data->user=Auth::User();
      $data=(array)$this->data;
   return view('template/pages/about',compact('data'));
   }
   function contact(){
      @$this->data->user=Auth::User();
      $data=(array)$this->data;
      return view('template/pages/contact',compact('data'));
   }
   
  
}
