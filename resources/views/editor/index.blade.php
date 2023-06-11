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
@extends('layouts.app-editor')
@section('content')
    <div class="container-fluid" style="background-color: rgb(242,242,242);">

        <br>
        <div id="full" style="background-color: rgb(242,242,242);">
            <div style="background-color: rgb(242,242,242);">
                <div class="row">
                    <div class="col-md-6" id="fullcodigo">
                        <div class="card" id="cardeditor">
                            <div class="card-header">
                                <span id="titulo-editor">Editor</span>
                                <p id="timeout" class="position-absolute top-30">&#128505; Copiado</p>
                                <div class="float-end">
                                    <select class="form-select d-inline" onchange="selectTheme()" id="select"
                                        aria-label="Temas">
                                        <option selected disabled><i class="bi bi-brightness-high-fill"></i>
                                            Selecionar o Tema
                                        </option>
                                        <option>default</option>
                                        <option>duotone-light</option>
                                        <option>mdn-like</option>
                                        <option>neo</option>
                                        <option>cobalt</option>
                                        <option>dracula</option>
                                        <option>material-darker</option>
                                        <option>oceanic-next</option>
                                        <option>seti</option>
                                    </select>
                                    <button type="button" class="btn btn-light d-inline p-2" data-bs-toggle="tooltip"
                                        title="Limpar!"><i class="bi bi-arrow-clockwise"
                                            id="refreshcodemirror"></i></button>
                                    <button type="button" class="btn btn-light d-inline p-2" data-bs-toggle="tooltip"
                                        title="Copiar Código!"><i class="bi bi-clipboard" id="copycodemirror"></i></button>
                                    <button type="button" class="btn btn-light d-inline p-2" data-bs-toggle="tooltip"
                                        title="Adicionar Estrutura HTML!"><i class="bi bi-filetype-html"
                                            id="addhtml"></i></button>

                                    <button type="button" class="btn btn-light d-inline p-2" onclick="openFullscreen()"><i
                                            class="bi bi-code-square" data-bs-toggle="tooltip"
                                            title="Tela Inteira Editor!"></i></button>
                                    <button type="button" class="btn btn-light d-inline p-2" onclick="openFullscreen2()"><i
                                            class="bi bi-window-fullscreen" data-bs-toggle="tooltip"
                                            title="Tela Inteira Visualização!"></i></button>
                                    <button type="button" class="btn btn-light d-inline p-2" onclick="openFullscreen3()"><i
                                            class="bi bi bi-fullscreen" data-bs-toggle="tooltip"
                                            title="Tela Inteira Visualização - Editor + Visualização!"></i></button>

                                </div>
                            </div>
                            <div class="card-body">
                                <textarea class="editor" id="htmlCode" placeholder="HTML Code" oninput="showPreview()"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" id="fullpainel">
                        <div class="card" id="cardeditor">
                            <div class="card-header">
                                <span id="titulo-editor">Visualização</span>
                            </div>
                            <div class="card-body">
                                <iframe id="preview" scrolling="auto | yes | no" scrolling="no" width="720"
                                    height="730">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>


    </div>
@endsection

<script>
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
