@extends('../layouts/main')

@section('content')



<h4 class="text-center"><strong> Auteur : {{$user->name}} </strong></h4><br><br><br>

<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1>">

<p class="text-left">{{$post->post_content}}</p>


</div>
<hr>
<!--formulaire de commentaire pour un article-->
<form method="POST" action='{{url("/comment/{post->post_id}")}}'>
{{csrf_field()}}

  <div class="form-group">
     <textarea id="comment"  rows="6" cols="6" class="form-control" name="comment" required autofocus>
     </textarea>
  </div>
  <div class="form-group">
   <button type="submit" class="btn btn-success btn-lg  btn-block"> Envoyer mon commentaire</button>
  </div>
</form>


@endsection
