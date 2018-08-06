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
            <h2>Contact Us</h2>
            <label for="inputName">Your Name(required)</label>
        <input type="text" id="inputName" class="form-control"placeholder="Name" required <<<autofocus></br>
        <label for="inputEmail">Your Email(required)</label>
        <input type="text" id="inputEmail" class="form-control"placeholder="Email" required autofocus></br>
        <label for="inputtext">Subject</label>
        <input type="text" id="inputtext" class="form-control"placeholder="subject" required autofocus></br>
        <label for="inputtext">Message</label>
        <input type="text" id="inputtext" class="form-control"placeholder="Message" required autofocus></br>
          <button type="button" class="btn btn-pink">Send Message</button>
        </div>
            
            
            
          

            </div><!-- /.blog-main -->

                
      
@stop