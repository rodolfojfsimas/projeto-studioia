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
