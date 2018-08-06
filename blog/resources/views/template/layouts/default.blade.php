<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="{{URL::to('')}}/public/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{URL::to('')}}/public/assets/css/bootstrap.theme.css">
    <link href="{{URL::to('')}}/public/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="{{URL::to('')}}/public/assets/css/blog.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{URL::to('')}}/public/assets/fonts">
  <script src="{{URL::to('')}}/public/assets/js/jquery.min.js"></script>
  <script src="{{URL::to('')}}/public/assets/js/bootstrap.js"></script>

  <link rel="stylesheet" type="text/css" href="{{URL::to('')}}/public/assets/css/custom.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Wood and Spoon</title>
  </head>

  <body>
    <div class='logo'>
    <img src="{{URL::to('')}}/public/assets/images/logo.jpg">
    </div>

    <nav class="clearfix">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li><a href="{{URL::to('')}}/home">Home</a></li>
        <li><a href="{{URL::to('')}}/about">About Us</a></li>
        <li class="dropdown">
          <a href="#" ="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modules <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{URL::to('')}}/categories">Categories</a></li>
            <li><a href="{{URL::to('')}}/addpost">Add Posts</a></li>
            
            <li role="separator" class="divider"></li>
            <li><a href="{{URL::to('')}}/allcategories">All Categories</a></li>
            <li><a href="{{URL::to('')}}/allpost">All Posts</a></li>
            <li><a href="{{URL::to('')}}/allusers">All Users</a></li>
          </ul>
        </li>
        <li><a href="{{URL::to('')}}/contact">Contact Us<span class="glyphicon glyphicon-envelope"></span></a></li>
        

        @if(!empty($data['user']))
        <li><a href="{{URL::to('')}}/logout">Log Out</a></li>
        @else
        <li><a href="{{URL::to('')}}/signin">Sign In</a></li>
        <li><a href="{{URL::to('')}}/signup">Sign Up</a></li>
        @endif
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
@yield('content')

      <div class="row">
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            
            <div class="about">
              <h4>Meet Kate</h4>
            <img src="{{URL::to('')}}/public/assets/images/kate.png">
            <h3>I'm Kate Wood. I make cakes and cute babies</h3>
            <img src="{{URL::to('')}}/public/assets/images/about2.png">

          </div>
          <div class="sidebar-module">
            <h4>Recent Posts</h4>
            <ol class="list-unstyled">
              <li><a href="#"> Brookies (Brownie Cookie Bars) February 13, 2018</a></li>
              <li><a href="#"> YOU NEED TO KNOW: How to Make Ganache (and Homemade Chocolate Truffles!) February 7, 2018</a></li>
              <li><a href="#"> Turtle Ice Cream & MONTH OF CHOCOLATE February 1, 2018</a></li>
              <li><a href="#"> Butterscotch Blondies January 25, 2018</a></li>
            </ol>
          </div>
          
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

       
    <footer class="blog-footer">
      <p>all rights are reserved</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>