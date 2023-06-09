<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XDQJ0B3945"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-XDQJ0B3945');
</script>


<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K4TP782');
</script>
<!-- End Google Tag Manager -->

<meta name="description" content="Inspire-se. Conheça os projetos desenvolvidos pela Studio.IA.">
<meta name="keywords"
    content="Inteligência Artificial, IA, Ferramentas de IA, Projetos de IA, Consultoria de IA, Editor HTML, Tecnologia, Engenharia de Prompt, Machine Learning, Deep Learning, Ciência de Dados">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="icon" type="image/png" sizes="32x32" href="/iconfavicon.png">
@extends('layouts.app-welcome')
@section('content')
    <br>
    <div class="container">
        <h3 id="back-grupo">
            <div style="color:#f2b800;">Inspire-se</div> Conheça os projetos desenvolvidos
        </h3>
        <br>
        <input type="text" name="pesquisar" id="pesquisar" class="form-control" placeholder="Pesquisar Projeto">
        <br>
        <br>
        <div class="row row-cols-1 row-cols-md-4 g-4" id="projeto-list">
            @foreach ($projeto as $projeto)
                <div class="col">
                    <div class="card h-100" id="card-projeto">
                        <div id="container">
                            <img src="{{ URL::to('/') }}/storage/{{ $projeto->imagem }}" class="img-fluid" alt="Projetos"
                                id="img-projeto" />
                            <div class="middle">
                                <button type="button" class="btn" id="btn-abrir-projeto" data-bs-toggle="modal"
                                    data-bs-target="#myModal{{ $projeto->id }}">
                                    Abrir Projeto
                                </button>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">{{ $projeto->titulo }}</h5>
                                <div>
                                    <button type="button" class="btn d-inline p-2"
                                        id="data">{{ $projeto->data }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal{{ $projeto->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">{{ $projeto->titulo }}</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h3 id="subtitulo-slide"> {{ $projeto->resumo }}</h3>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card" id="card-modal">
                                            <h5 style="color:#f2b800; font-weight:bold;">Sobre</h5>
                                            <br>
                                            <p>{!! nl2br($projeto->content) !!}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ URL::to('/') }}/storage/{{ $projeto->imagem }}" class="img-fluid"
                                            alt="Projetos" id="" style="max-height: 320px; width:auto;" />
                                        <br>
                                        <br>
                                        <a href="{{ $projeto->urlvideo }}" target=”_blank”>
                                            <button class="btn btn-danger" type="button"><i
                                                    class="bi bi-play-btn-fill"></i>
                                                Assistir
                                                video</button>
                                        </a>
                                    </div>
                                </div>
                                <br>
                                <h5 id="subtitulo-modal-programas">Tecnologias Uilizadas: {{ $projeto->programas }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<script>
    $(document).ready(function() {
        $('#pesquisar').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#projeto-list .col').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.toggle-icon').click(function() {
            var button = $(this);
            var projectId = button.data('id');
            var icon = button.find('i');

            // Toggle the icon class
            if (icon.hasClass('bi-chevron-down')) {
                icon.removeClass('bi-chevron-down').addClass('bi-chevron-up');
            } else {
                icon.removeClass('bi-chevron-up').addClass('bi-chevron-down');
            }

            // TODO: Perform some action with the project ID
        });
    });
</script>
