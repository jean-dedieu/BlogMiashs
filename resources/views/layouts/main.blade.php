

</body>

</html>







<!--Fin main code d'avant-->


<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <!--si on ici par exemple about on afficher about | EchoMiashs- Blog -->
        <title>{{ page_title($title ?? '') }}</title>
        <!--<title>{{ isset($title) ? $title . '|' : ''}} EchoMiashs - Blog</title>-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    


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

     @include('flashy::message')
          
    </body>
</html>















