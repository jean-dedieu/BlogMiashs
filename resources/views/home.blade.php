@extends('layouts.app')


@section('content')


<div class="text-center">




@endsection

<h3><a  href="{{ url('http://127.0.0.1:8000/articles/'.$post->post_name) }}" >{{$post->post_title}} </a><h3>

@endforeach
</div>

@extends('views.welcome')


