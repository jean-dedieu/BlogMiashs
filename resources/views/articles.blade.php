
<html>

@extends('layouts/main')
</html>
<body>

</body>


@section('content')

<div class="class=d-flex p-2">
<ul>

    <h1 class= "text-center text-light bg-dark">A la une</h1>
        @foreach ( $posts as $post )



        <li class="list-group-item list-group-item-primary "> <a href="{{ url('http://127.0.0.1:8000/articles/'.$post->post_name) }}" >{{$post->post_title}}</a>

        </li>

        @endforeach

</ul>
</div>
@endsection

