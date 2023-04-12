@extends('template')

@section('content')
    <h1>Listado</h1>

    @foreach($posts as $posts)
    <p>
        <strong>{{ $posts['id'] }}</strong>
        <a href="{{ route('post', $posts['slug']) }}"> Mira en el inspector del navegador y observa como se crea el enlace<br>
            {{ $posts['title'] }}
        </a>
    </p>
    @endforeach
@endsection