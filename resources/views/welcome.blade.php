@extends('layouts/main',['title'=> 'Home'])

@section('content')


<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1>">

<h1 class="text-center bg-primary text-white">Bienvenue sur le site de Miashs</h1>

</div>

<img height="300" width="1500" src="app/public/storage/images/image1.jpg" alt="SLIDE DES  IMAGES "/>

<div class="col-md-8 col-md-offset-4 col-sm-10 col-sm-offset-1>">

<h2  class="btn btn-danger center">&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp  Vous trouverez ici les 3 derniers articles  publiés&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp</h2>

</div><br><br><br><br><br>



<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1>">




    <div class="text-center">

         @foreach ( $posts as $post )

       <h3><a  href="{{ url('http://127.0.0.1:8000/articles/'.$post->post_name) }}" >{{$post->post_title}} </a><h3>




         @endforeach
</div>
<div class="row">
  <div class="col-sm-2">
    <div class="row">
      <aside class="border-1"><p>

      Lorem ipsum dolor sit amet, rdum leo.

Ut inib

      </p></aside>
      <aside class="border-1"><p> Lorem ipsum dolor sit amet, rdum leo.Lorem ipsum dolor sit amet.

      </p></aside>
    </div>
  </div>
  <section class="col-sm-10 col-md-8">Section</section>
  <div class="clearfix visible-sm"></div>
  <div class="col-md-2">

    <div class="row">
      <aside class="col-md-12"><p>Lorem ipsum dolor sit amet,  quam nibh fringilla lacus, sit amet fermentu.</p></aside>
      <aside class="col-md-12"><p>Sit amet fermentum ligula massa et justo. massa et justo.</p></aside>
    </div>
  </div>
</div>

</div>


@endsection
