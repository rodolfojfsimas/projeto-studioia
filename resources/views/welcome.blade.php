<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="icon" type="image/png" sizes="32x32" href="/iconfavicon.png">

@extends('layouts.app-welcome')
@section('content')
    <div class="container-xl">
        <br>
        <div class="card" id="card-home">
            <div class="row">
                <div class="col-md-5" id="col-teste">
                    <h1 id="teste1">
                        <span id="texto-ap"></span>
                        <span id="texto-ap">A</span>
                        <span id="texto-ap">inteligência</span>
                        <span id="texto-ap">artificial</span>
                        <span id="texto-ap">está</span>
                        <span id="texto-ap">revolucionando</span>
                        <span id="texto-ap">o</span>
                        <span id="texto-ap">mundo</span>
                        <span id="texto-ap">como</span>
                        <span id="texto-ap">o</span>
                        <span id="texto-ap">conhecemos.</span>
                        <span id="texto-ap">Explore</span>
                        <span id="texto-ap">o</span>
                        <span id="texto-ap">potencial</span>
                        <span id="texto-ap">ilimitado,</span>
                        <span id="texto-ap">seja</span>
                        <span id="texto-ap">criativo.</span>
                        <span id="texto-ap"></span>
                    </h1>
                </div>
                <div class="col-md-7">
                    <div class="ratio ratio-16x9">
                        <video id="my-video" src="apresentacao.mp4" style="border-radius: 15px;" autoplay muted>
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <!--Inicio Ferramenta-->
        <h6 style="text-align: center; color:rgb(225,225,225)"><i class="bi bi-diamond-fill"></i> &nbsp; &nbsp; &nbsp; <i
                class="bi bi-diamond-fill"></i> &nbsp; &nbsp; &nbsp; <i class="bi bi-diamond-fill"></i></h6>
        <br><br>
        <div class="card" id="card-home-ferramenta">
            <h3 id="back-grupo3"><i class="bi bi-robot"></i> Ferramentas</h3>
            <!--<h5 id="h5-texto-home">Conheça algumas ferramentas disponíveis no mercado</h5>-->
            <br>
            <!--Carousel-->
            <div class="container">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h3 id="subtitulo-slide">Todos os Públicos</h3>
                            <br>
                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                @foreach ($publico as $publico)
                                    <div class="col">
                                        <div class="card h-100" id="card-ferramena-search">
                                            <a href="{{ $publico->url }}" target=”_blank”>
                                                <img src="{{ URL::to('/') }}/storage/{{ $publico->logo }}"
                                                    class="img-fluid rounded-start .mx-auto" alt="..."
                                                    id="img-ferramenta" />
                                            </a>
                                            <div class="card-body">
                                                <p hidden> {{ $publico->nome }}</p>
                                                <p id="descricao"> {{ $publico->descricao }}</p>
                                                <p id="tags">{{ $publico->tag }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h3 id="subtitulo-slide">Empresas e Desenvolvedores </h3>
                            <br>
                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                @foreach ($empresa as $empresa)
                                    <div class="col">
                                        <div class="card h-100" id="card-ferramena-search">
                                            <a href="{{ $empresa->url }}" target=”_blank”>
                                                <img src="{{ URL::to('/') }}/storage/{{ $empresa->logo }}"
                                                    class="img-fluid rounded-start .mx-auto" alt="..."
                                                    id="img-ferramenta" />
                                            </a>
                                            <div class="card-body">
                                                <p hidden> {{ $empresa->nome }}</p>
                                                <p id="descricao"> {{ $empresa->descricao }}</p>
                                                <p id="tags">{{ $empresa->tag }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fim Carousel-->
            <br>
            <a href="{{ route('ferramenta') }}">
                <h6 id="mais">Descubra mais <i class="bi bi-chevron-double-right"></i></h6>
            </a>
        </div>
        <br><br><br>
        <!--Inicio Consultoria-->
        <h6 style="text-align: center; color:rgb(225,225,225)"><i class="bi bi-diamond-fill"></i> &nbsp; &nbsp; &nbsp; <i
                class="bi bi-diamond-fill"></i> &nbsp; &nbsp; &nbsp; <i class="bi bi-diamond-fill"></i></h6>
        <br><br>
        <div class="card" id="card-home-ferramenta">
            <h3 id="back-grupo3"><i class="bi bi-bar-chart"></i> Consultoria</h3>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="ratio ratio-16x9" id="video-avatar">
                        <video id="my-avatar" src="avatar.mp4" style="border-radius: 15px;" controls>
                        </video>
                    </div>
                </div>
                <div class="col-md-6" id="col-home">
                    <h5 id="h5-texto-home-card">Atualmente, a Inteligência Artificial se tornou uma das tecnologias mais
                        importantes para empresas de
                        todos os setores e tamanhos.<br>
                        <br>
                        Saiba como a consultoria em IA pode impulsionar seu
                        negócio.
                        Oferecemos serviços personalizados e desenvolvemos projetos para ajudá-lo a alcançar resultados
                        melhores e mais rápidos.
                        <br>
                        <br>
                        Conte conosco
                    </h5>
                </div>
            </div>
        </div>
        <br><br><br>
        <!--Inicio Projetos-->
        <h6 style="text-align: center; color:rgb(225,225,225)"><i class="bi bi-diamond-fill"></i> &nbsp; &nbsp; &nbsp; <i
                class="bi bi-diamond-fill"></i> &nbsp; &nbsp; &nbsp; <i class="bi bi-diamond-fill"></i></h6>
        <br><br>
        <div class="card" id="card-home-ferramenta">
            <h3 id="back-grupo3"><i class="bi bi-boxes"></i> Projetos</h3>
            <br>
            <div class="row">
                <div class="col-md-6" id="col-home">
                    <h5 id="h5-texto-home-card">
                        Venha conosco em uma jornada através dos projetos
                        desenvolvidos com as
                        incríveis ferramentas de inteligência artificial e muita programação!
                        <br><br>
                        Fique atualizado através
                        de nosso site e
                        canal
                        do <a href="https://www.youtube.com/@StudioIA-ic1rt" target="_blank"><i class="bi bi-youtube"
                                style="color: red;"></i> YouTube</a>, onde fornecemos detalhes sobre todas
                        as etapas e comandos
                        utilizados.
                    </h5>
                </div>
                <div class="col-md-6">
                    <div class="card" id="card-projeto-welcome">
                        <div class="d-flex align-items-start">
                            <!-- <ul class="nav v-nav-pills mb-3" id="pills-tab" role="tablist">-->
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                @foreach ($projeto as $item)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link @if ($loop->first) active @endif"
                                            id="v-pills-slide{{ $item->id }}-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-{{ $item->id }}" type="button" role="tab"
                                            aria-controls="v-pills-{{ $item->id }}"
                                            aria-selected="@if ($loop->first) true @else false @endif">
                                            <i class="bi bi-square-fill"></i>
                                        </button>
                                    </li>
                                @endforeach
                                <!-- </ul>-->
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                @foreach ($projeto as $item)
                                    @if (is_object($item) || is_array($item))
                                        <div class="tab-pane fade @if ($loop->first) show active @endif"
                                            id="v-pills-{{ $item->id }}" role="tabpanel"
                                            aria-labelledby="v-pills-{{ $item->id }}-tab">
                                            <div class="modal-body">
                                                <div id="container">
                                                    <img src="{{ URL::to('/') }}/storage/{{ $item->imagem }}"
                                                        class="img-fluid" alt="Projetos" id=""
                                                        style="max-height: 280px; width:auto;" />

                                                    <div class="middle">
                                                        <button type="button" class="btn" id="btn-abrir-projeto"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modal-{{ $item->id }}">
                                                            Abrir Projeto
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="modal-{{ $item->id }}" tabindex="-1"
                                                    aria-labelledby="modal-{{ $item->id }}-label" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">
                                                                    {{ $item->titulo }}</h4>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h3 id="subtitulo-slide"> {{ $item->resumo }}</h3>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="card" id="card-modal">
                                                                            <h5 style="color:#f2b800; font-weight:bold;">
                                                                                Etapas</h5>
                                                                            <br>
                                                                            <p>{!! nl2br($item->content) !!}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <img src="{{ URL::to('/') }}/storage/{{ $item->imagem }}"
                                                                            class="img-fluid" alt="Projetos"
                                                                            id=""
                                                                            style="max-height: 320px; width:auto;" />
                                                                        <br>
                                                                        <br>
                                                                        <a href="{{ $item->urlvideo }}" target=”_blank”>
                                                                            <button class="btn btn-danger"
                                                                                type="button"><i
                                                                                    class="bi bi-play-btn-fill"></i>
                                                                                Assistir
                                                                                video</button>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <h5 id="subtitulo-modal-programas">Tecnologias Uilizadas:
                                                                    {{ $item->programas }}
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <br>
        <a href="{{ route('projeto') }}">
            <h6 id="mais">Explore mais <i class="bi bi-chevron-double-right"></i></h6>
        </a>
        <br><br><br>
        <h6 style="text-align: center; color:rgb(225,225,225)"><i class="bi bi-diamond-fill"></i> &nbsp; &nbsp; &nbsp; <i
                class="bi bi-diamond-fill"></i> &nbsp; &nbsp; &nbsp; <i class="bi bi-diamond-fill"></i></h6>
        <br><br>
        <!--Artigos-->
        <div id="container-artigo">
            <h3 id="back-grupo3"><i class="bi bi-newspaper"></i> Artigos</h3>
            <br>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-ia-tab" data-bs-toggle="pill" data-bs-target="#pills-ia"
                        type="button" role="tab" aria-controls="pills-ia" aria-selected="true">Inteligência
                        Artificial</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-eprompt-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-eprompt" type="button" role="tab" aria-controls="pills-eprompt"
                        aria-selected="false">Engenharia de
                        Prompt</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-ia" role="tabpanel" aria-labelledby="pills-ia-tab"
                    tabindex="0">
                    <div id="artigo-list-ai-home">
                        <div class="card" style="border: transparent;">
                            <div class="card-body" id="">
                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    @foreach ($inteligencia as $inteligencia)
                                        <a href="{{ route('ainteligencia.show', $inteligencia->id) }}">
                                            <div class="card mb-3" id="card-artigo-ai">
                                                <div class="row g-0">
                                                    <div class="col-3">
                                                        <img src="{{ URL::to('/') }}/storage/{{ $inteligencia->imagem }}"
                                                            class="img-fluid" alt="..." id="img-card" />
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="card-body" id="card-body-artigo">
                                                            <p class="card-text"><small
                                                                    class="text-body-secondary">{{ $inteligencia->data }}</small>
                                                            </p>
                                                            <p class="card-text" id="block-artigo">
                                                                {{ $inteligencia->titulo }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <a href="{{ route('inteligencia') }}">
                                <h6 id="mais">Leia mais <i class="bi bi-chevron-double-right"></i></h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-eprompt" role="tabpanel" aria-labelledby="pills-eprompt-tab"
                    tabindex="0">

                    <div class="card" style="border: transparent;">
                        <div class="card-body" id="">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                @foreach ($prompt as $prompt)
                                    <a href="{{ route('aprompt.show', $prompt->id) }}">
                                        <div class="card mb-3" id="card-artigo-ai">
                                            <div class="row g-0">
                                                <div class="col-3">
                                                    <img src="{{ URL::to('/') }}/storage/{{ $prompt->imagem }}"
                                                        class="img-fluid" alt="..." id="img-card" />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body" id="card-body-artigo">
                                                        <p class="card-text"><small
                                                                class="text-body-secondary">{{ $prompt->data }}</small>
                                                        </p>
                                                        <p class="card-text" id="block-artigo">
                                                            {{ $prompt->titulo }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <a href="{{ route('prompt') }}">
                            <h6 id="mais">Leia mais <i class="bi bi-chevron-double-right"></i></h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--Fim artigos-->
        <!--Avatar-->
        <br><br><br><br><br>
        <h6 style="text-align: center; color:rgb(225,225,225)"><i class="bi bi-diamond-fill"></i> &nbsp; &nbsp; &nbsp; <i
                class="bi bi-diamond-fill"></i> &nbsp; &nbsp; &nbsp; <i class="bi bi-diamond-fill"></i></h6>
        <br>
        <div class="d-flex justify-content-center">
            <div class="card text-center" id="card-nome"
                style="max-width: 840px; border:transparent; background-color: rgb(235,235,235); padding: 15px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/avatar.png" class="img-fluid" alt="Logo" id=""
                            style="height: 180px; width: 180px; border-radius: 50%; ">
                        <h5 id="nome">Rodolfo Simas</h5>
                        <p class="card-text" id="sub-fundador">Fundador
                            <br><span id="span-sub-fundador"> Economista e Desenvolvedor de TI</span>
                        </p>


                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="align-middle" id="mensagem-home">"Nosso objetivo é fornecer conhecimento e soluções
                                práticas para ajudar as
                                pessoas e
                                empresas a aproveitarem
                                ao máximo da Inteligência Artificial."<br><br>
                                <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><i class="bi bi-chat-text"></i>&nbsp;&nbsp;
                                    Fale
                                    Conosco</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

    </div>
    <!--Fim Avatar-->
@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Selecione o canal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="height: 370px;">
                <div class="d-grid gap-2">
                    <a class="btn btn-dark" href="https://forms.gle/Suu2ibpHxbvrxUCq7" target=”_blank” role="button"
                        type="button">Consultoria</a>

                    <a class="btn btn-dark" href="https://forms.gle/FyXx7SxKn6j6P8vX7" target=”_blank” role="button"
                        type="button">Sugestões de Projetos</a>
                    <hr>
                    <h5> <i class="bi bi-whatsapp"></i> (11) 98623-9705</h5>
                    <a href="https://www.youtube.com/@StudioIA-ic1rt" target="_blank">
                        <h5><i class="bi bi-youtube" style="color: red;"></i> YouTube </h5>
                    </a>
                </div>
                <br>
                <div class="ratio ratio-16x9">
                    <video id="animation" src="animation.mp4" autoplay muted>
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
