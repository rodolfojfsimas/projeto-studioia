<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Studio.IA | Editor</title>
    <link rel="icon" href="book2.png" type="image/png" sizes="16x16">

    @stack('css')
    @stack('scripts')


    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/editar.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirror/lib/codemirror.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirror/theme/dracula.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirror/theme/duotone-light.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirror/theme/mdn-like.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirror/theme/neo.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirror/theme/cobalt.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirror/theme/material-darker.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirror/theme/oceanic-next.css') }}" rel="stylesheet">
    <link href="{{ asset('codemirror/theme/seti.css') }}" rel="stylesheet">

    <script src="{{ asset('js/edit.js') }}" defer></script>
    <script src="{{ asset('js/fullscreen.js') }}" defer></script>
    <script src="{{ asset('codemirror/lib/codemirror.js') }}"></script>
    <script src="{{ asset('codemirror/mode/xml/xml.js') }}"></script>
    <script src="{{ asset('codemirror/mode/css/css.js') }}"></script>
    <script src="{{ asset('codemirror/mode/javascript/javascript.js') }}"></script>
    <script src="{{ asset('codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
    <script src="{{ asset('codemirror/mode/clike/clike.js') }}"></script>
    <script src="{{ asset('codemirror/addon/edit/closetag.js') }}"></script>
    <script src="{{ asset('codemirror/addon/edit/closebrackets.js') }}"></script>
    <script src="{{ asset('codemirror/addon/edit/matchbrackets.js') }}"></script>
    <script src="{{ asset('codemirror/addon/edit/matchtags.js') }}"></script>
    <script src="{{ asset('codemirror/addon/fold/xml-fold.js') }}"></script>
    <script src="{{ asset('codemirror/src/input/indent.js') }}"></script>
    <script src="{{ asset('codemirror/addon/fold/indent-fold.js') }}"></script>

    <script src="https://kit.fontawesome.com/c489be23d9.js" crossorigin="anonymous"></script>


</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-custom py-0 shadow-sm p-3 bg-body rounded">
        <div class="container-xxl">
            <a class="navbar-brand" href="{{ url('/') }}">
                <div>
                    <img src="/logoface.png" class="img-fluid d-inline p-2" alt="Logo"
                        style="height: 38px; width:auto; margin-top:-6px" id="">
                    <h4 class="d-inline p-2" style="color:black" id="nome-logo">Studio.IA</h4>
                </div>
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
                    <li class="nav-item dropdown">
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

    <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; 2023 - Studio.IA | www.studioia.com.br </small>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
