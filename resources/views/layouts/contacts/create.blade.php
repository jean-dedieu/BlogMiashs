@extends('layouts.main',['title' => 'About'])

@section('content')



<div class="container">
   

    <div class="#"> 
      

       <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1>">
           <h2>Restons en contact <i class="far fa-smile-wink"></i></h2><br>

          
              <form method="POST" action="{{route('contact_path')}}">
                  {{csrf_field()}}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

                     <label for="name" class="control-label">Nom</label><br>
                       <input type="text" name="name" id="name" class="form-control" required="required" value="{{ old('name')}}">
                       {!! $errors->first('name', '<span class="help-block">:message</span>')!!}
                </div>

                    <div class="form-group">

                       <label for="email" class="control-label">E-mail</label>
                       <input type="email" name="email" id="email" class="form-control" required="required" value="{{ old('email')}}" >
                       {!! $errors->first('email', '<span class="help-block">:email</span>')!!}
                   </div>

                      <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">

                       <label for="message" class="control-label" sr-only>Votre message</label>
                       <input type="textarea" class="form-control" rows="10" cols="10" required ="required" name="message" id="message">{{ old('message')}}</textarea>
                       {!! $errors->first('message', '<span class="help-block">:message</span>')!!}

                   </div>

                   <div class="form-group">

                       <button class="btn btn-success btn-block" type="submit">J'envoi &raquo;</button>

                      </div>

           </form>
         </div>
  
    </div>
</div>

@stop