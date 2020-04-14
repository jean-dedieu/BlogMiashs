@extends('../layouts/main')

@section('content')



<h4 class="text-center"><strong> Auteur : {{$user->name}} </strong></h4><br><br><br>

<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1>">

<p class="text-left">{{$post->post_content}}</p>


</div>
@
<hr>
<hr>
<!--formulaire de commentaire pour un article // method="POST" à ajouter plus tard-->
<form class="mt-3" method="POST" action='{{url("/{post->path}/comments")}}'>
{{csrf_field()}}

  <div class="form-group">
     <textarea id=""  placeholder="votre commentaire ici..." rows="6" cols="6" class="form-control" name="body" required autofocus>
         {{ old('body')}}
     </textarea>
  </div>
 
   <button type="submit" class="btn btn-success btn-lg  btn-block"> Envoyer mon commentaire</button>
 
</form>

  <!--{<div class="card">
   
</div>-->


@endsection
