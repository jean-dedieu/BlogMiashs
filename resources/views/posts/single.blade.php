@extends('../layouts/main')

@section('content')



<h4 class="text-center"> Auteur : {{$user->name}} </h4>




<p class="text-center">{{$post->post_content}}</p>


<p class="text-center">Fin article</p>

@endsection
