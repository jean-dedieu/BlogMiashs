@extends('layouts.main')

<<<<<<< HEAD
<div class="text-center">

@foreach ( $posts as $post )

<h3><a  href="{{ url('http://127.0.0.1:8000/articles/'.$post->post_name) }}" >{{$post->post_title}} </a><h3>

@endforeach
</div>
=======
@extends('views.welcome')

      
 
>>>>>>> menu
