@extends('template/layouts/default')
@section('content')
    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"> </h1>
        <p class="lead blog-description"></p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Brookies (Brownie Cookie Bars)</h2>
            <p class="blog-post-meta">Posted on February 13, 2018
              by Kate</p>

            <img src="{{URL::to('')}}/public/assets/images/post1.jpg">
            <hr>
            <p>Have you heard of brookies? If you’re unfamiliar, fear not, because we are going to get down to the nitty gritty in today’s #monthofchocolate installment. Brookies are essentially brownie cookie bars, a treat that is equal parts chocolate chip cookie dough and brownie batter. Both components are baked into one ultra-rich and satisfying dessert, the ultimate treat for the chocolate lover who refuses to choose between chocolate chip cookies and brownies. </p>
            <div class="btn-group">
                <button type="button" class="btn btn-pink dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Read More <span class="caret"></span>
                </button>
              </br></br>
            <h2>YOU NEED TO KNOW: How to Make Ganache (and Homemade Chocolate Truffles!)</h2>
            <p class="blog-post-meta"> Posted on February 7, 2018
            by Kate<a href="#"></a></p>
            <img src="{{URL::to('')}}/public/assets/images/post2.jpg">
            <p>There are a few recipes that every home baker needs to know like the back of their hand. Ganache, with only two ingredients and two steps to create it, is one of a few baking fundamentals that can elevate homemade dishes to sweet, chocolatey bliss. Despite its simplicity, ganache often scares bakers away from attempting to make it themselves at home. Today, in an effort to conquer this Everest, we are going to cover the basics on ganache so that you can create decadent, chocolate dishes with ease from here on out. We're also going to learn how to make 4 different types of homemade chocolate truffles from a single ganache base, so if you're interested in making some treats for your valentine (or yourself, no judgement here!), this is a post you'll want to listen in on. Let's get started!What Is It? </p>
            <button type="button" class="btn btn-pink dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Read More <span class="caret"></span>
                </button>
              </br></br>
            
          </div><!-- /.blog-post -->

          <div class="blog-post">
            <h2 class="blog-post-title">Turtle Ice Cream & MONTH OF CHOCOLATE</h2>
            <p class="blog-post-meta"> Posted on February 1, 2018
            by Kate<a href="#"></a></p>
            <img src="{{URL::to('')}}/public/assets/images/post3.jpg">

            <p>Y'ALL. It's already here, and I'm so excited that I could almost pee my pants. We're celebrating something way better than Christmas morning, the first day of school, or even a second date with a major hottie, because today marks the beginning of MONTH OF CHOCOLATE.Do you guys remember all the chocolate shenanigans we partook in last year? There were homemade chocolates and a white chocolate layer cake. There was a hazelnut mocha cream pie and two minty desserts: sandwich cookies and a mint brownie ice cream cake. We played with cocoa powder and dark chocolate bars, mini chocolate chips and fudgy ganache. Basically it was a sticky-sweet month of decadent chocolate desserts, and those few short days were so glorious that it had to be a tradition in the making. So people, today we start the se</p>
            <button type="button" class="btn btn-pink dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Read More <span class="caret"></span>
                </button>
              </br></br>
          </div><!-- /.blog-post -->

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

            </div><!-- /.blog-main -->


        </div><!-- /.container -->

  </body>
</html>
@stop