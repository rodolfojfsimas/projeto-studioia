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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="icon" type="image/png" sizes="32x32" href="/iconfavicon.png">
@extends('layouts.app-welcome')
@section('content')
    <div class="container">
        <br>
        <h3 id="back-grupo">{{ $grupo->nome }}</h3>
        <br>
        <input type="text" name="search" id="search" class="form-control" placeholder="Pesquisar Ferramentas">
        <br>
        <br>
        <ul id="ferramenta-list">
            @foreach ($grupo->ferramenta as $ferramenta)
                <li>
                    <a href="{{ $ferramenta->url }}">
                        <div class="card mb-3" id="card-ferramenta" style="max-width: 1100px;">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <img src="{{ URL::to('/') }}/storage/{{ $ferramenta->logo }}"
                                        class="img-fluid rounded-start .mx-auto" alt="..." id="img-card" />
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $ferramenta->nome }}</h4>
                                        <p class="card-text">{{ $ferramenta->descricao }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection


<script>
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#ferramenta-list li').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
