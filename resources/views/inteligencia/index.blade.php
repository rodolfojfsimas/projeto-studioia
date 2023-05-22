<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="icon" type="image/png" sizes="32x32" href="/iconfavicon.png">
@extends('layouts.app-welcome')
@section('content')
    <div class="container-fluid">
        <div class="row g-3">
            <div class="col-md-4">
                <div id="artigo-list-ai">
                    <div class="card" id="card-aside-artigo">
                        <div class="card-header" id="card-header-artigo">
                            <input type="text" name="pesquisarartigoai" id="pesquisarartigoai" class="form-control"
                                placeholder="Pesquisar Artigos">
                        </div>
                        <div class="card-body" id="card-body-focus">
                            @foreach ($inteligencia as $inteligencia)
                                <a href="{{ route('inteligencia.show', $inteligencia->id) }}">
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
                                                    <p class="card-text" id="block-artigo">{{ $inteligencia->titulo }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card" id="card-aside">
                    <div class="card-body" id="card-body-focus">
                        <h3 id="back-grupo2">Inteligência Artificial (IA)</h3>
                        <br>
                        <h5 id="subtitulo">
                            A Inteligência Artificial é um campo mais amplo que envolve a capacidade de um sistema ou
                            dispositivo realizar tarefas que normalmente exigiriam inteligência humana. Isso pode incluir a
                            capacidade de compreender a linguagem natural, tomar decisões baseadas em dados, reconhecer
                            objetos em imagens ou até mesmo jogar jogos.</h5>
                        <br>
                        <h5 id="corpo-texto1">A IA inclui outras técnicas além do Machine Learning, como:</h5>
                        <br>
                        <p id="p-corpo"><strong>&#8227; Lógica Fuzzy:</strong> um tipo de lógica que permite que as
                            máquinas tomem decisões com base em
                            incertezas e informações vagas.</p>
                        <p id="p-corpo"><strong>&#8227; Redes Neurais:</strong> um método de processamento de informações
                            que se assemelha à estrutura e
                            funcionamento do cérebro humano.</p>
                        <p id="p-corpo"><strong>&#8227; Processamento de Linguagem Natural:</strong> a capacidade de uma
                            máquina entender e interpretar a
                            linguagem humana, incluindo conversas em tempo real e textos escritos.</p>
                        <p id="p-corpo"><strong>&#8227; Sistemas Especialistas:</strong> um tipo de sistema de
                            inteligência artificial que utiliza regras e
                            conhecimentos específicos para tomar decisões e realizar tarefas.</p>
                        <br><br>
                        <h3 id="back-grupo2">Machine Learning (Aprendizado de Máquina)</h3>
                        <br>
                        <h5 id="subtitulo">Machine Learning é uma subcategoria de Inteligência Artificial (IA) que envolve
                            a capacidade de um sistema aprender e melhorar com dados sem ser explicitamente programado. Em
                            outras palavras, o algoritmo é capaz de identificar padrões nos dados de treinamento e, em
                            seguida, aplicar esse conhecimento para fazer previsões precisas ou tomar decisões semelhantes
                            com novos dados.
                            <br><br>
                            O objetivo principal do machine learning é construir modelos que possam ser
                            treinados para realizar tarefas específicas, como reconhecimento de imagem, detecção de fraudes,
                            classificação de e-mails ou recomendação de produtos.
                        </h5><br>
                        <h5 id="corpo-texto1"> Existem três tipos principais de
                            aprendizado de máquina:</h5>
                        <br>
                        <p id="p-corpo"><strong>&#8227; Aprendizado Supervisionado:</strong> onde o modelo é treinado com
                            dados rotulados (dados de entrada com uma resposta conhecida) e é capaz de fazer previsões ou
                            classificações precisas com novos dados não rotulados.
                            <br><br>
                            Exemplo: Um modelo de aprendizado supervisionado pode ser treinado com dados de
                            imagem de gatos e cachorros rotulados, e, em seguida, ser capaz de classificar novas imagens
                            como gato ou cachorro com alta precisão.
                        </p>
                        <br>
                        <p id="p-corpo"><strong>&#8227; Aprendizado Não-Supervisionado:</strong> onde o modelo é treinado
                            com dados não rotulados e é capaz de identificar padrões ou agrupamentos nos dados.
                            <br><br>
                            Exemplo: Um modelo de aprendizado não supervisionado pode ser treinado com
                            dados de compras de clientes e identificar grupos de clientes com comportamentos de compra
                            semelhantes.
                        </p>
                        <br>
                        <p id="p-corpo"><strong>&#8227; Aprendizado por Reforço:</strong> onde o modelo é treinado
                            através de interações com um ambiente dinâmico e recebe recompensas ou punições com base em suas
                            ações.
                            <br><br>
                            Exemplo: Um modelo de aprendizado por reforço pode ser treinado para jogar um
                            jogo e receber recompensas ou punições com base em suas ações no jogo.
                        </p>
                        <br><br>
                        <h3 id="back-grupo2">Deep Learning (Aprendizado Profundo)</h3>
                        <br>
                        <h5 id="subtitulo">Deep Learning é uma técnica específica de aprendizado de máquina que envolve
                            redes neurais profundas com muitas camadas. Essas redes neurais são capazes de aprender
                            representações complexas de dados com múltiplas camadas, permitindo que o modelo aprenda
                            características hierárquicas de um conjunto de dados.
                            <br><br>O objetivo principal do Deep Learning é construir modelos que possam lidar com dados não
                            estruturados, como imagens, áudio e texto, e realizar tarefas como reconhecimento de voz,
                            reconhecimento facial, tradução automática e muitas outras.
                            <br><br>Uma das principais diferenças entre o Deep Learning e o Machine Learning tradicional é
                            que o Deep Learning é capaz de aprender representações mais complexas dos dados, enquanto o
                            Machine Learning tradicional depende de recursos ou características extraídos manualmente dos
                            dados.
                            <br><br>
                            Exemplo: Um modelo de Deep Learning pode ser treinado para reconhecer rostos humanos em uma
                            imagem, mesmo quando eles estão em diferentes ângulos, iluminações ou expressões faciais.
                        </h5>
                        <br>
                        <br>
                        <h5 id="h5-sutitulo">Considerações</h5>
                        <br>
                        <p id="p-corpo">Em resumo, Machine Learning é um subcampo de Inteligência Artificial que envolve
                            a capacidade de um sistema aprender e melhorar com dados sem ser explicitamente programado,
                            enquanto a Inteligência Artificial é um campo mais amplo que inclui outras técnicas além do
                            Machine Learning. O Deep Learning é uma técnica específica de aprendizado de máquina que envolve
                            redes neurais profundas com muitas camadas, permitindo que o modelo aprenda representações
                            complexas de um conjunto de dados.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    $(document).ready(function() {
        $('#pesquisarartigoai').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#artigo-list-ai #card-artigo-ai').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
