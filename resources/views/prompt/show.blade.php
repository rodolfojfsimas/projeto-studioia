@extends('layouts.app-welcome')
@section('content')
    <br>
    <div class="container" id="container-show-artigo">
        <h1><strong>{{ $prompt->titulo }}</strong></h1>
        <br>
        <h4>{{ $prompt->subtitulo }}</h4>
        <br>
        <p>{{ $prompt->data }}</p>
        <hr>
        <img src="{{ URL::to('/') }}/storage/{{ $prompt->imagem }}" class="img-fluid rounded mx-auto d-block" alt="..."
            id="img-artigo" />
        <br><br>
        <p id="p-artigo">{!! nl2br($prompt->content) !!}</p>
    </div>
@endsection
