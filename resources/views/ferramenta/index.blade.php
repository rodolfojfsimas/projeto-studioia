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

<meta name="description" content="Descubra as incríveis ferramentas de inteligência artificial.">
<meta name="keywords"
    content="Inteligência Artificial, IA, Ferramentas de IA, Projetos de IA, Consultoria de IA, Editor HTML, Tecnologia, Engenharia de Prompt, Machine Learning, Deep Learning, Ciência de Dados">



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="icon" type="image/png" sizes="32x32" href="/iconfavicon.png">
@extends('layouts.app-welcome')
@section('content')
    <br>
    <div class="container">
        <h3 id="back-grupo">
            <div style="color:#f2b800;">Descubra</div> As incríveis ferramentas de inteligência artificial
        </h3>
        <br>

        <div class="row">
            <div class="col-md-5">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-publico-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-publico" type="button" role="tab" aria-controls="pills-publico"
                            aria-selected="true">Todos os públicos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-empresa-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-empresa" type="button" role="tab" aria-controls="pills-empresa"
                            aria-selected="false">Empresas e desenvolvedores</button>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <!--<input type="text" name="ferramentas" id="ferramentas" class="form-control"
                                                                                                                placeholder="Pesquisar Ferramentas">-->
            </div>
        </div>


        <br>
        <!--TABS CONTENT-->
        <div class="tab-content" id="pills-tabContent">
            <!--PUBLICO EM GERAL-->
            <div class="tab-pane fade show active" id="pills-publico" role="tabpanel" aria-labelledby="pills-publico-tab"
                tabindex="0">
                <input type="text" name="ferramentas" id="ferramentas" class="form-control"
                    placeholder="Pesquisar Ferramentas">
                <br>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="card h-100" id="card-menu-ferramenta">
                            <div class="card-header">
                                Selecionar
                            </div>
                            <div class="card-body">
                                @foreach ($grupo as $grupo)
                                    <div class="form-check" id="card-menu-body-ferramenta">
                                        <input class="form-check-input checkbox-bootstrap" type="checkbox"
                                            value="{{ $grupo->id }}">
                                        {{ $grupo->nome }}

                                    </div>
                                    <p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row row-cols-1 row-cols-md-3 g-4" id="card-publico-search">
                            @foreach ($ferramenta as $ferramenta)
                                <div class="col">
                                    <div class="card h-100 item-bootstrap {{ $ferramenta->grupo_id }}"
                                        id="card-ferramena-search">
                                        <a href="{{ $ferramenta->url }}" target=”_blank”>
                                            <img src="{{ URL::to('/') }}/storage/{{ $ferramenta->logo }}"
                                                class="img-fluid rounded-start .mx-auto" alt="..."
                                                id="img-ferramenta" />
                                        </a>
                                        <div class="card-body">
                                            <p hidden> {{ $ferramenta->nome }}</p>
                                            <p id="descricao"> {{ $ferramenta->descricao }}</p>
                                            <p id="tags">{{ $ferramenta->tag }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!--EMPRESAS-->
            <div class="tab-pane fade" id="pills-empresa" role="tabpanel" aria-labelledby="pills-empresa-tab"
                tabindex="0">
                <input type="text" name="ferramentas2" id="ferramentas2" class="form-control"
                    placeholder="Pesquisar Ferramentas">
                <br>
                <div class="row row-cols-1 row-cols-md-4 g-4" id="card-empresa-search">
                    @foreach ($desenvolvedor as $desenvolvedor)
                        <div class="col">
                            <div class="card h-100 {{ $desenvolvedor->grupo_id }}" id="card-ferramena-search">
                                <a href="{{ $desenvolvedor->url }}" target=”_blank”>
                                    <img src="{{ URL::to('/') }}/storage/{{ $desenvolvedor->logo }}"
                                        class="img-fluid rounded-start .mx-auto" alt="..." id="img-ferramenta" />
                                </a>
                                <div class="card-body">
                                    <p hidden> {{ $desenvolvedor->nome }}</p>
                                    <p id="descricao"> {{ $desenvolvedor->descricao }}</p>
                                    <p id="tags">{{ $desenvolvedor->tag }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    $(document).ready(function() {
        // Adicione o evento change ao elemento checkbox
        $('.checkbox-bootstrap').change(filtrarItens);

        function filtrarItens() {
            // Obtenha todos os checkboxes marcados
            var checkboxes = $('.checkbox-bootstrap:checked');

            // Se nenhum checkbox estiver marcado, mostre todos os itens
            if (checkboxes.length === 0) {
                $('.item-bootstrap').parent().show(); // Show the parent element of item-bootstrap
            } else {
                // Oculte todos os itens
                $('.item-bootstrap').parent().hide(); // Hide the parent element of item-bootstrap

                // Mostre apenas os itens cujas classes correspondem aos valores dos checkboxes marcados
                checkboxes.each(function() {
                    var classe = $(this).val();
                    $('.' + classe).parent()
                        .show(); // Show the parent element of the matched item-bootstrap
                });
            }
        }
    });
</script>

<script>
    $(document).ready(function() {
        $('#ferramentas').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#card-publico-search .col').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#ferramentas2').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#card-empresa-search .col').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
