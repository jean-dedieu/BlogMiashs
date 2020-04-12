@extends('layouts.app')

@section('content')
<nav class="navbar navbar-default navbar-static">
    <div class="container">
      <div class="navbar-header">
       <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>-->
        <a class="navbar-brand" href="{{ route('root_path') }}">{{ env('APP_NAME')}}</a>

        <ul class="nav navbar-nav">
        <li class="{{ set_active_route('root_path') }}"><a href="{{ route('root_path') }}">Accueil</a></li>
       <li class="{{ set_active_route('about_path') }}"><a href="{{ route('about_path') }}">Qui sommes-nous</a></li>
       <li class="{{ set_active_route('contact_path') }}"><a href="{{ route('contact_path')}}">Contacts</a></li>
       <!--<li class="menu-text">Le Blog</li>-->
      <!-- <li><a href="http://127.0.0.1:8000/">Home</a></li>-->
       <li class="{{ set_active_route('articles_path') }}"><a href="http://127.0.0.1:8000/articles">Articles</a></li>
       <!--<li><a href="http://127.0.0.1:8000/contact">Contact</a></li>-->




      <div id="" class="navbar-collapse collapse" style="background-color: 99FFFF;">

      </div>
    </div>
</nav>


@endsection
