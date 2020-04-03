<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>slide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="jQuery Responsive Carousel - Owl Carusel">
    <meta name="author" content="Bartosz Wojciechowski">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="../assets/css/bootstrapTheme.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <!-- Owl Carousel Assets -->
    <!--<link href="../owl-carousel/owl.carousel.css" rel="stylesheet">-->
    <link href="stylesheet" href="{{asset('../owlcarousel/owl.carousel.css') }}">
    <!--<link href="../owl-carousel/owl.theme.css" rel="stylesheet">-->
    <link href="stylesheet" href="{{asset('../owlcarousel/owl.theme.css') }}">

    <link href="../assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  
    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>
  <body>

      
   

      <div id="demo">
        <div class="container">
          <div class="row">
            <div class="span12">
              <div id="owl-demo" class="owl-carousel">

                <div class="item"><img src="assets/fullimage1.jpg" alt="The Last of us"></div>
                <div class="item"><img src="assets/fullimage2.jpg" alt="GTA V"></div>
                <div class="item"><img src="assets/fullimage3.jpg" alt="Mirror Edge"></div>
                <div class="item"><img src="assets/fullimage1.jpg" alt="Mirror Edge"></div>
                <div class="item"><img src="assets/fullimage2.jpg" alt="Mirror Edge"></div>
                <div class="item"><img src="assets/fullimage2.jpg" alt="Mirror Edge"></div>
              </div>
            </div>
          </div>
        </div>
    </div>

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

        
      
          
         


        </div>
        
         
          

          

        </div>
      </div>
    </div>

    


    <script src="../assets/js/jquery-1.9.1.min.js"></script> 
    <script src="../owl-carousel/owl.carousel.js"></script>


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

    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>

    <script src="../assets/js/google-code-prettify/prettify.js"></script>
    <script src="../assets/js/application.js"></script>

  </body>
</html>
