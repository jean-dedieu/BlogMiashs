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





    <nav class="navbar navbar-default navbar-static">
      <div class="container">
        <div class="navbar navbar-dark bg-dark">
         <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>-->
          <a class="navbar-brand" href="{{ route('root_path') }}">{{ env('APP_NAME')}}</a>

          <ul class="nav navbar-nav ">
          <li class="{{ set_active_route('root_path') }}"><a href="{{ route('root_path') }}">Accueil</a></li>
         <li class="{{ set_active_route('about_path') }}"><a href="{{ route('about_path') }}">Qui sommes-nous</a></li>
         <li class="{{ set_active_route('contact_path') }}"><a href="{{ route('contact_path')}}">Contacts</a></li>
         <!--<li class="menu-text">Le Blog</li>-->
        <!-- <li><a href="http://127.0.0.1:8000/">Home</a></li>-->
         <li class="{{ set_active_route('articles_path') }}"><a href="http://127.0.0.1:8000/articles">Articles</a></li>
         <!--<li><a href="http://127.0.0.1:8000/contact">Contact</a></li>-->


         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sites extérieurs <span class="caret"></span></a>
           <ul class="dropdown-menu">
              <li><a href="http://www.twagirumuhoza.com">Atelier web</a></li>
             <li><a href="http://formations.univ-grenoble-alpes.fr/fr/catalogue/master-XB/sciences-humaines-et-sociales-SHS/master-
                   mathematiques-et-informatique-appliquees-aux-sciences-humaines-et-sociales-miashs-program-master-mathematiques-informatique-
                   appliquees-et-sciences-humaines-et-sociales/parcours-double-competence-informatique-et-sciences-sociales-dciss-subprogram-informatique-et
                   -sciences-sociales.html">Master MIASHS</a></li>


            <!-- <li role="separator" class="divider"></li>
             <li class="dropdown-header">Autres</li>
             <li><a href="#">Autres</a></li>
             <li><a href="#">Autres</a></li>-->
           </ul>
         </li>
       </ul>

       <ul class="nav navbar-nav navbar-right">
             <button class="sign"><li><a href="#">Se connecter</a></li></button>
             <button class="sign"><li><a href="#">Devenir membre</a></li></button>

            </ul>
        </div>


        <div id=""class="navbar navbar-dark bg-primary">

        </div><!--/.nav-collapse -->
      </div>
</nav>

  </head>
  <body>

    <div id="title">
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


    <div id="example-info">
      <div class="container">
        <div class="row">
          <div class="span12">


              </div>

            </div><!--End Tab Content-->

          </div>
        </div>
      </div>
    </div>

    <div id="more">
      <div class="container">




<div class="col-md-8 col-md-offset-4 col-sm-10 col-sm-offset-1>">

<h2  class="btnarticles">  Vous trouverez ici les 3 derniers articles  publiés&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp</h2>

</div>



  <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1>">


  <div class="text-center">


       </div>

</div>


        </div>

        </div>
      </div>
    </div>




    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="owl-carousel/owl.carousel.js"></script>


    <!-- Demo -->

    <style>
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>


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
