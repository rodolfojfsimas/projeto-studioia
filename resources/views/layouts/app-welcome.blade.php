<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">





    <title>Studio.IA | Bem-Vindo</title>

    <meta name="description"
        content="Studio.IA é uma empresa focada em inteligência artificial, oferecendo ferramentas, projetos, consultoria e um editor HTML interativo.">
    <meta name="keywords"
        content="Inteligência Artificial, IA, Ferramentas de IA, Projetos de IA, Consultoria de IA, Editor HTML, Tecnologia, Engenharia de Prompt, Machine Learning, Deep Learning, Ciência de Dados">

    <link rel="icon" type="image/png" sizes="16x16" href="/iconfavicon.png">


    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Days+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/c489be23d9.js" crossorigin="anonymous"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2B7HLWM1PN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-2B7HLWM1PN');
    </script>

</head>

<body id="body-welcome">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K4TP782" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <nav class="navbar navbar-expand-sm navbar-custom py-0 shadow-sm p-3 bg-body rounded">
        <div class="container-xxl">
            <a class="navbar-brand" href="{{ url('/') }}">
                <div>
                    <img src="/logoface.png" class="img-fluid d-inline p-2" alt="Logo"
                        style="height: 38px; width:auto; margin-top:-6px" id="">
                    <h4 class="d-inline p-2" style="color:black" id="nome-logo">Studio.IA</h4>
                </div>

                <!--   <h5 id="logobook">
                    <>Book
                </h5>
                <img src="/imgbook.jpg" class="img-fluid" alt="Logo" style="width: 90px; height: auto;"
                    id="imglogo">-->
                <!--<h3><span id="e">all</span><span id="ops">Economia</span></h3>-->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon" id="navicon"><i class="fas fa-bars fa-1x"></i></span>-->
                <span class="navbar-toggler-icon" id="navicon">
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ferramenta') }}" style="color: #333f4f;"><i
                                class="bi bi-robot"></i>
                            Ferramentas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('projeto') }}" style="color: #333f4f;"><i
                                class="bi bi-boxes"></i>
                            Projetos</a>
                    </li>
                    <li class="nav-item dropdown" style="color: #333f4f;">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: #333f4f;">
                            <i class="bi bi-journal-text"></i> Sobre IA
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('inteligencia') }}">Inteligência
                                    Artificial</a></li>
                            <li><a class="dropdown-item" href="{{ route('prompt') }}">Engenharia de Prompt
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('editor') }}" style="color: #333f4f;"><i
                                class="bi bi-code-square"></i>
                            Editor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('nova.login') }}" id="login"><i
                                class="bi bi-box-arrow-in-right"></i>
                            Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="bd-intro ps-lg-0">
            @yield('content')
        </div>
    </main>

    <br><br><br><br>
    <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; 2023 - Studio.IA | www.studioia.com.br </small>
        </div>
    </footer>

    <!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>-->

    <script>
        window.onload = function() {
            var video = document.getElementById("my-video");
            video.pause();
            video.currentTime = -3;
            setTimeout(function() {
                video.play();
            }, 3000); // 3000 milliseconds = 3 seconds
            video.addEventListener('timeupdate', function() {
                var duration = video.duration;
                var currentTime = video.currentTime;
                var endDuration = duration - 1; // Stop video 1 second before end
                if (currentTime >= endDuration) {
                    video.pause();
                }
            });
        };
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>



</body>

</html>
