@extends('layouts/main',['title'=> 'Home'])

@section('content')

    <h1>Bienvenue sur le site de Miashs</h1>

    <ul>

         @foreach ( $posts as $post )

       <li> <a  href="{{ url('http://127.0.0.1:8000/articles/'.$post->post_name) }}" >{{$post->post_title}} </a>


       </li>

         @endforeach
    </ul>


@endsection
