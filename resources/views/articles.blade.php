@extends('layouts/main',['title'=>'Articles'])


<html>

</html>

<header>

<style>
.art{
    padding:20px;
    margin-left:20px;
    text-align: center;
    color: #00ff00;

}

</style>
</header>


@section('content')

<h1 class= "text-center text-light bg-dark">A la une de l'actualité d'aujourd'hui</h1>

   <div class="articlees"

    @foreach ( $posts as $post )



    <div class="art" ><a href="{{ url('http://127.0.0.1:8000/articles/'.$post->post_name) }}" >{{$post->post_title}}</a></div>


    @endforeach

</div>

<body>


</body>
@endsection

