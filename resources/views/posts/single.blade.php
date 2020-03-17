@extends('../layouts/main')

@section('content')



<h4> Auteur : {{$user->name}} </h4>



{{$post->post_content}}
    
@endsection