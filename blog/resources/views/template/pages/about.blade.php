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
            <h2>About Me</h2>
            <p>Hi there! I’m Kate Wood, the self-taught baker, writer, and photographer behind Wood and Spoon blog. I live in LA (that’s Lower Alabama, y’all!) where my husband and I are raising our three year old daughter and a baby boy that’s fresh from the oven.</p>
            <div class="about">
            <img src="{{URL::to('')}}/public/assets/images/about.jpg">

            <p>I work by day as a clinical dietitian, and by night, I liberally practice my “everything in moderation” motto by baking and experimenting with new recipes and flavors. Most of my inspiration comes from cookbooks, travels, and the desire to create things with my own two hands. I believe in thank you notes, laughing at yourself, and the magic that happens when friends share good food and recipes.</p>
          </div>
            <div class="about">
            <img src="{{URL::to('')}}/public/assets/images/about3.jpg">
            <p>I like to make food pretty and approachable, so I hope you find a lot of that here. Other things you’ll also probably read about on this blog include my education and introduction to Southern culture, my love for crafting, gatherings, and traveling, and the joys and mishaps that so characterize my life as a new wife and mama. </p>
            
          </div>

          <div class="about">
            <img src="{{URL::to('')}}/public/assets/images/about4.jpg">

            <p>Shoot me a note here if you’d like to work together. I like pairing up with brands and makers that feel at home in my kitchen, so if you think that’s you, let’s chat!

For more cakes and cute baby photos, follow me on Instagram here.</p>
          </div>

            </div><!-- /.blog-main -->

        </div>        

@stop