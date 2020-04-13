
<?php
$title='Home';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>slide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="jQuery Responsive Carousel - Owl Carusel">
    <meta name="author" content="Bartosz Wojciechowski">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrapTheme.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">

    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>





   

  </head>
  <body>
  @include('layouts/partials/_nav')

    <div id="">
      <div class="container">
        <div class="row">
          <div class="span12">

          </div>
        </div>
      </div>
    </div>
      <div id="demo">
        <div class="container">
          <div class="row">
            <div class="span12">
              <div id="owl-demo" class="owl-carousel">

                <div class="item"><img src="assets/fullimage1.jpg" alt="The Last of us"></div>
                <div class="item"><img src="assets/fullimage2.jpg" alt="GTA V"></div>
                <div class="item"><img src="assets/fullimage3.jpg" alt="Mirror Edge"></div>
                <div class="item"><img src="assets/fullimage3.jpg" alt="Mirror Edge"></div>
                <div class="item"><img src="assets/fullimage3.jpg" alt="Mirror Edge"></div>
                <div class="item"><img src="assets/fullimage3.jpg" alt="Mirror Edge"></div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery.min.js"></script>
    @include('flashy::message')


  


      <div class="container">




<div class="col-md-8 col-md-offset-4 col-sm-10 col-sm-offset-1>">

<h2  class="btnarticles">  Vous trouverez ici les 3 derniers articles  publiés&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp</h2>

</div>

<div class="text-center">


@foreach ( $posts as $post )

<h3><a  href="{{ url('http://127.0.0.1:8000/articles/'.$post->post_name) }}" >{{$post->post_title}} </a><h3>

@endforeach
</div>
        </div>


@foreach ( $posts as $post )

<h3><a  href="{{ url('http://127.0.0.1:8000/articles/'.$post->post_name) }}" >{{$post->post_title}} </a><h3>

@endforeach
</div>
  



    <!--<script src="js/jquery-1.9.1.min.js"></script>-->
    <script src="owl-carousel/owl.carousel.js"></script>


  

    


    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({

      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true

      // "singleItem:true" is a shortcut for:
      // items : 1,
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

      });
    });
    </script>

    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-tab.js"></script>

    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/application.js"></script>
 @include('layouts/partials/_footer')



   

  </body>
</html>
