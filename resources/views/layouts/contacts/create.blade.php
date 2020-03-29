@extends('layouts.main',['title' => 'About'])

@section('content')



<div class="container">

    <div class="row"> 
      

       <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1>">
           <h2>Restons en contact <i class="far fa-smile-wink"></i></h2><br>

           <form action="{{ route('contact_path')}}" method="POST">
                  {{ csrf_field()}}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

                     <label for="name" class="control-label">Nom</label><br>
                       <input type="text" name="name" id="name" class="form-control" required="required" >
                       {!! $errors->first('name', '<span class="help-block">:message</span>')!!}
                </div>
                    <div class="form-group">

                       <label for="email" class="control-label">E-mail</label><br>
                       <input type="email" name="email" id="email" class="form-control" required="required" >
                       {!! $errors->first('email', '<span class="help-block">:email</span>')!!}
                   </div>
                      <div class="form-group">

                       <label for="message" class="control-label" sr-only>Votre message</label><br>
                       <input type="textarea" class="form-control" rows="20" cols="30" name="message" id="message" required="required" >
                       {!! $errors->first('message', '<span class="help-block">:message</span>')!!}

                   </div>
                   <div class="form-group">

                       <button class="btn btn-success btn-block &raquo;">J'envoi</button>

                      </div>

           </form>
         </div>
  
    </div>
</div>

@stop