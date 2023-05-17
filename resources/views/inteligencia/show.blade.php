<link rel="icon" type="image/png" sizes="32x32" href="/iconfavicon.png">
@extends('layouts.app-welcome')
@section('content')
    <br>
    <div class="container" id="container-show-artigo">
        <h1><strong>{{ $inteligencia->titulo }}</strong></h1>
        <br>
        <h4>{{ $inteligencia->subtitulo }}</h4>
        <br>
        <p>{{ $inteligencia->data }}</p>
        <hr>
        <img src="{{ URL::to('/') }}/storage/{{ $inteligencia->imagem }}" class="img-fluid rounded mx-auto d-block"
            alt="..." id="img-artigo" />
        <br><br>
        <p id="p-artigo">{!! nl2br($inteligencia->content) !!}</p>
    </div>
@endsection
