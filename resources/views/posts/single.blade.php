@extends('../layouts/main')

@section('content')



<h4 class="text-center"><strong> Auteur :{{$user->name}} </strong></h4><br><br><br>

<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1>">

<p class="text-left">{{$post->post_content}}</p>


</div>


@endsection
