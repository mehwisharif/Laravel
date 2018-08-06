@extends('template/layouts/default')
@section('content')
<div class="container">

      <div class="blog-header">
        <h1 class="blog-title"> </h1>
        <p class="lead blog-description"></p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="conatct-form">
            <h2>Sign Up</h2>
            <form action="{{URL::to('')}}/updateuser" method="POST">
            <input type="hidden" name="id" value="{{$data['post']->id}}">
            <input type="hidden" name="_token" value="{{csrf_token() }}">

            <label for="inputName">Your Name(required)</label>
        <input type="text" id="inputName" class="form-control"placeholder="Name" name="name" value="{{$data['post']->name}}" required autofocus></br>
        <label for="inputEmail">Your Email(required)</label>
        <input type="email" id="inputEmail" class="form-control"placeholder="Email" name="email" value="{{$data['post']->email}}" required autofocus ></br>
        <label for="inputtext">Password</label>
        <input type="password" id="inputtext" class="form-control"placeholder="Password" name="password" value="{{$data['post']->password}}" required autofocus></br>
        <label for="inputtext">Retype Password</label>
        <input type="password" id="inputtext" class="form-control"placeholder="Retype Password" name="retypepassword" value="{{$data['post']->retypepassword}}" required autofocus></br>
          <button type="submit" class="btn btn-pink">Sign Up</button>
        </div>
            
            
            
          

            </div><!-- /.blog-main -->

                
      
@stop