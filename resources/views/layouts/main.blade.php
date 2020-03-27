
<!--
  <div class="top-bar">
    <div class="top-bar-left">
      <ul class="menu">
        <li class="menu-text">Le Blog</li>
        <li><a href="http://127.0.0.1:8000/">Home</a></li>
        <li><a href="http://127.0.0.1:8000/articles">Articles</a></li>
        <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
        
      </ul>
    </div>
  </div>

  <div class="callout large primary">
    <div class="row column text-center">
      <h1 style =color:#04a> JEANDE DE DIEU ET ABDOULAYE</h1>
      <h2 class="subheader"></h2>
    </div>
  </div>

  <div class="row medium-8 large-7 columns">
 @yield('content')
  </div>

  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
  <script>
    $(document).foundation();
  </script>




-->

</body>

</html>







<!--Fin main code d'avant-->


<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title>{{ isset($title) ? $title . '|' : ''}} EchoMiashs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <style>

       p,h1,h2{

         font-family:'open-sans', Helvetica,Arial,sans-serif;
         font-size:14px;
         }

         
       
       </style>


        <title>Blog</title>
       <!-- google font open sans-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
            <!-- fontawesome -->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>

       <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    


      
       
    </head>
    <body>
    <!--pour inclure le navbar dans le contenu de cette page-->

    @include('layouts/partials/_nav')
      
    @yield('content')

     <!--pour inclure le footer dans le contenu de cette page-->
     <hr></hr><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     @include('layouts/partials/_footer')

     <script src="//code.jquery.com/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
     integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


          
    </body>
</html>















