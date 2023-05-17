<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="icon" type="image/png" sizes="32x32" href="/iconfavicon.png">

@extends('layouts.app-welcome')
@section('content')
    <div class="container-fluid">
        <div class="row g-4">
            <div class="col-md-4">
                <div id="artigo-list">
                    <div class="card" id="card-aside-artigo">
                        <div class="card-header" id="card-header-artigo">
                            <input type="text" name="pesquisarartigo" id="pesquisarartigo" class="form-control"
                                placeholder="Pesquisar Artigos">
                        </div>
                        <div class="card-body" id="card-body-focus">
                            @foreach ($prompt as $prompt)
                                <a href="{{ route('prompt.show', $prompt->id) }}">
                                    <div class="card mb-3" id="card-artigo">
                                        <div class="row g-0">
                                            <div class="col-md-3">
                                                <img src="{{ URL::to('/') }}/storage/{{ $prompt->imagem }}"
                                                    class="img-fluid rounded-start" alt="..." id="img-card" />
                                            </div>
                                            <div class="col-md-9">
                                                <div class="card-body" id="card-body-artigo">
                                                    <p class="card-text"><small
                                                            class="text-body-secondary">{{ $prompt->data }}</small>
                                                    </p>
                                                    <p class="card-text" id="block-artigo">{{ $prompt->titulo }}
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
                    <div class="card-header" id="card-header-artigo">
                        <h3 id="back-grupo2">Engenharia de Prompt</h3>
                        <br>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-introducao-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-introducao" type="button" role="tab"
                                    aria-controls="pills-introducao" aria-selected="true">Introdução</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-prompt-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-prompt" type="button" role="tab"
                                    aria-controls="pills-prompt" aria-selected="false">Prompt Eficaz</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body" id="card-body-focus">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-introducao" role="tabpanel"
                                aria-labelledby="pills-introducao-tab" tabindex="0">

                                <h4 id="h4-titulo"># Introdução</h4>
                                <br>

                                <h5 id="subtitulo">A engenharia de prompt é o processo de projetar e otimizar os prompts ou
                                    instruções
                                    dadas
                                    aos modelos de
                                    inteligência
                                    artificial (IA) para produzir as saídas desejadas. O objetivo da engenharia de prompt é
                                    melhorar o
                                    desempenho
                                    dos
                                    modelos de IA, fornecendo prompts mais informativos e específicos.</h5>
                                <br>
                                <h5 id="corpo-texto1">Para iniciar o aprendizado sobre engenharia de prompt, aqui
                                    estão alguns pontos a serem considerados:</h5>
                                <br><br>
                                <h5 id="h5-sutitulo">1- Fundamentos de processamento de linguagem natural</h5>
                                <br>
                                <p id="p-corpo"> Antes de começar a estudar a engenharia de prompt, é importante entender
                                    os
                                    fundamentos do processamento de linguagem natural (PLN). O PLN é uma área de estudo
                                    que se concentra em como os computadores podem entender e gerar linguagem natural.
                                    Isso inclui tarefas como reconhecimento de fala, tradução automática, análise de
                                    sentimentos e geração de texto.
                                    <br><br>
                                    Algumas das técnicas e conceitos importantes no PLN incluem:
                                    <br><br>
                                    <strong>&#8227; Tokenização:</strong> A tokenização envolve dividir o texto em pedaços
                                    menores, chamados
                                    de
                                    tokens. Os tokens geralmente correspondem a palavras ou caracteres individuais.
                                    <br><br>
                                    <strong>&#8227; Vetores de embedding:</strong> Os vetores de embedding são usados para
                                    representar
                                    palavras
                                    ou frases como vetores numéricos. Esses vetores podem ser usados para treinar
                                    modelos de PLN e melhorar o desempenho em tarefas como análise de sentimentos e
                                    tradução automática.
                                    <br><br>
                                    <strong>&#8227; Modelos de linguagem:</strong> Os modelos de linguagem são usados para
                                    prever a próxima
                                    palavra em uma sequência de palavras. Esses modelos são treinados em grandes
                                    conjuntos de dados de texto e podem ser usados em uma variedade de tarefas de PLN.
                                    <br><br>
                                    <strong>&#8227; Redes neurais:</strong> As redes neurais são usadas para treinar modelos
                                    de PLN. Essas
                                    redes
                                    são compostas por camadas de neurônios que processam a entrada de dados e geram uma
                                    saída.
                                    <br><br>
                                    Um exemplo de uma tarefa de PLN é a análise de
                                    sentimentos. Nessa
                                    tarefa,
                                    um modelo de PLN é treinado para determinar se um texto tem uma conotação positiva,
                                    negativa ou neutra. Por exemplo, uma análise de sentimento pode ser usada para
                                    determinar se um tweet é positivo ou negativo em relação a uma marca.
                                </p>
                                <br><br>
                                <h5 id="h5-sutitulo">2- Modelos de linguagem pré-treinados</h5>
                                <br>
                                <p id="p-corpo">Os modelos de linguagem pré-treinados são uma das principais ferramentas
                                    usadas na engenharia de prompt. Esses modelos são treinados em grandes conjuntos de
                                    dados de texto e podem ser adaptados para realizar tarefas específicas. O GPT-3 é um
                                    exemplo de modelo de linguagem pré-treinado.
                                    <br><br>
                                    Algumas das técnicas e conceitos importantes na adaptação de modelos de linguagem
                                    pré-treinados incluem:
                                    <br><br>
                                    <strong>&#8227; Fine-tuning:</strong> O fine-tuning envolve a adaptação de um modelo
                                    pré-treinado para uma tarefa específica. Isso geralmente envolve treinar o modelo em um
                                    conjunto de dados menor e mais específico para a tarefa em questão.
                                    <br><br>
                                    <strong>&#8227; Prompt engineering:</strong> A engenharia de prompt envolve a criação de
                                    prompts eficazes para o modelo de linguagem pré-treinado. Um prompt é uma entrada que é
                                    fornecida ao modelo e usada para gerar uma resposta.
                                    <br><br>
                                    <strong>&#8227; Transfer learning:</strong> O transfer learning envolve a transferência
                                    de conhecimento de um modelo pré-treinado para uma tarefa específica. Isso pode ajudar a
                                    melhorar o desempenho do modelo em tarefas específicas, mesmo quando há poucos dados
                                    disponíveis.
                                    <br><br>
                                    Um exemplo de adaptação de um modelo de linguagem pré-treinado é o uso do GPT-3 para
                                    gerar textos descritivos de imagens. Para isso, é necessário criar um prompt que
                                    especifique as características que devem ser descritas pelo modelo. Por exemplo, o
                                    prompt pode incluir informações sobre a cena da imagem, como "Descreva a paisagem de uma
                                    praia ao pôr do sol". O modelo pré-treinado é então fine-tuned usando um conjunto de
                                    dados de imagens e descrições correspondentes para aprender a gerar uma descrição
                                    adequada.
                                </p>
                                <br><br>
                                <h5 id="h5-sutitulo">3- Avaliação de modelos de PLN</h5>
                                <br>
                                <p id="p-corpo">A avaliação de modelos de PLN é um aspecto crítico da engenharia de
                                    prompt. É importante avaliar o desempenho do modelo em tarefas específicas para garantir
                                    que ele esteja funcionando corretamente. Existem várias métricas que podem ser usadas
                                    para avaliar modelos de PLN, incluindo precisão, recall e F1-score.<br><br>
                                    Algumas das técnicas e conceitos importantes na avaliação de modelos de PLN incluem:
                                    <br><br>
                                    <strong>&#8227; Conjuntos de dados de avaliação:</strong> Os conjuntos de dados de
                                    avaliação são usados para testar o desempenho do modelo em tarefas específicas. Esses
                                    conjuntos de dados geralmente incluem exemplos de entrada e saída esperada para o
                                    modelo.
                                    <br><br>
                                    <strong>&#8227; Métricas de avaliação:</strong> As métricas de avaliação são usadas para
                                    medir o desempenho do modelo em uma tarefa específica. Essas métricas podem incluir
                                    precisão, recall e F1-score, entre outras.
                                    <br><br>
                                    <strong>&#8227; Cross-validation:</strong> A cross-validation é uma técnica usada para
                                    avaliar a capacidade de um modelo de PLN de generalizar para novos dados. Isso envolve a
                                    divisão do conjunto de dados em conjuntos de treinamento e validação e a avaliação do
                                    modelo em vários conjuntos de validação diferentes.
                                    <br><br>
                                    Um exemplo de avaliação de um modelo de PLN é a avaliação do GPT-3 em tarefas de geração
                                    de texto, como a geração de respostas para perguntas. Para avaliar o desempenho do
                                    modelo, é possível usar conjuntos de dados de perguntas e respostas e métricas como a
                                    precisão e o recall para determinar a qualidade das respostas geradas pelo modelo.
                                </p>
                                <br><br>
                                <h5 id="h5-sutitulo">4- Ética e justiça em PLN</h5>
                                <br>
                                <p id="p-corpo">Finalmente, é importante considerar os aspectos éticos e de justiça na
                                    engenharia de prompt. Como a linguagem natural pode ser usada para influenciar o
                                    pensamento e o comportamento das pessoas, é importante garantir que os modelos de PLN
                                    sejam construídos de maneira justa e ética.<br><br>
                                    Algumas das técnicas e conceitos importantes na ética e justiça em PLN incluem:
                                    <br><br>
                                    <strong>&#8227; Bias mitigation:</strong> A mitigação de viés envolve a identificação e
                                    correção de viés nos modelos de PLN. Isso pode incluir a seleção de dados de treinamento
                                    representativos e a avaliação de modelos quanto a viés em relação a grupos
                                    sub-representados.
                                    <br><br>
                                    <strong>&#8227; Privacidade e segurança:</strong> A privacidade e a segurança são
                                    importantes em PLN, especialmente quando se trata de dados pessoais ou sensíveis. É
                                    importante garantir que os modelos de PLN não exponham dados pessoais e sejam protegidos
                                    contra ataques de segurança.
                                    <br><br>
                                    <strong>&#8227; Transparência e explicabilidade:</strong> A transparência e a
                                    explicabilidade envolvem a capacidade de entender como os modelos de PLN tomam decisões.
                                    Isso pode incluir a documentação de como os modelos foram treinados e a divulgação de
                                    informações sobre os dados de treinamento e as métricas de avaliação usadas.
                                    <br><br>
                                    Um exemplo de consideração ética em PLN é a mitigação de viés em modelos de detecção de
                                    emoções. Modelos de detecção de emoções podem ser usados para analisar a emoção em dados
                                    de texto ou voz, mas se esses modelos tiverem viés em relação a certos grupos, isso pode
                                    levar a preconceitos e injustiças. Portanto, é importante garantir que esses modelos
                                    sejam treinados em conjuntos de dados representativos e que sejam avaliados quanto a
                                    viés em relação a grupos sub-representados
                                </p>
                                <br><br>
                                <h5 id="h5-sutitulo">Considerações</h5>
                                <br>
                                <p id="p-corpo">Em resumo, a engenharia de prompt é uma área de PLN que se concentra na
                                    criação de prompts eficazes para modelos de PLN, com o objetivo de melhorar o desempenho
                                    e a eficiência desses modelos. Alguns dos fatores chave a serem considerados incluem o
                                    design de prompt, o fine-tuning de modelos pré-treinados, a avaliação de modelos de PLN
                                    e a ética e justiça em PLN.<br><br>
                                    A melhor maneira de aprender a engenharia de prompt é
                                    praticar e experimentar. Tente criar seus próprios prompts e avaliar o
                                    desempenho
                                    dos modelos em diferentes cenários. Isso ajudará você a entender melhor como a
                                    engenharia de prompt funciona na prática.</p>


                            </div>
                            <div class="tab-pane fade" id="pills-prompt" role="tabpanel" aria-labelledby="pills-prompt-tab"
                                tabindex="0">

                                <h4 id="h4-titulo"># Prompt Eficaz</h4>
                                <br>

                                <h5 id="subtitulo">É importante que os prompts sejam específicos e claros em relação à
                                    tarefa que se deseja
                                    realizar. Um prompt eficaz deve fornecer informações suficientes para o modelo entender
                                    o
                                    que se espera dele. Por outro lado, um prompt ineficaz pode ser ambíguo, vago ou muito
                                    genérico, o que dificulta para o modelo produzir uma saída precisa.
                                    <br><br>
                                    Lembre-se de que a eficácia do prompt depende da tarefa e do modelo de PLN que está
                                    sendo
                                    usado. Por isso, é importante experimentar diferentes prompts e avaliar o desempenho do
                                    modelo em cada caso.
                                </h5>
                                <br><br>
                                <h5 id="corpo-texto1">Seguem alguns exemplos</h5>
                                <br>
                                <h5 id="h5-sutitulo">1- Classificação de sentimento</h5>
                                <br>
                                <p id="p-corpo"><strong>&#8227; Prompt eficaz:</strong> "Classifique a emoção expressa
                                    neste texto como positiva, negativa ou neutra."<br><br>
                                    <strong>&#8227; Prompt ineficaz:</strong> "O que você acha deste texto?"
                                </p>

                                <br><br>
                                <h5 id="h5-sutitulo">2- Geração de texto</h5>
                                <br>
                                <p id="p-corpo"><strong>&#8227; Prompt eficaz:</strong> "Escreva uma sinopse de um filme
                                    de ficção científica em que a humanidade é ameaçada por invasores alienígenas."<br><br>
                                    <strong>&#8227; Prompt ineficaz:</strong> "Escreva uma história de ficção científica."
                                </p>
                                <br><br>
                                <h5 id="h5-sutitulo">3- Resposta a perguntas</h5>
                                <br>
                                <p id="p-corpo"><strong>&#8227; Prompt eficaz:</strong> "Qual é a capital da
                                    França?"<br><br>
                                    <strong>&#8227; Prompt ineficaz:</strong> "O que você sabe sobre a França?"
                                </p>
                                <br><br>
                                <h5 id="h5-sutitulo">4- Identificação de entidades nomeadas</h5>
                                <br>
                                <p id="p-corpo"><strong>&#8227; Prompt eficaz:</strong> "Identifique os nomes de países
                                    mencionados neste texto."<br><br>
                                    <strong>&#8227; Prompt ineficaz:</strong> "O que há neste texto?"
                                </p>
                                <br><br>
                                <h5 id="h5-sutitulo">5- Tradução de idiomas</h5>
                                <br>
                                <p id="p-corpo"><strong>&#8227; Prompt eficaz:</strong> "Traduza esta frase do inglês
                                    para o espanhol: 'How are you doing today?'"<br><br>
                                    <strong>&#8227; Prompt ineficaz:</strong> "Traduza algo para mim."
                                </p>
                                <br><br>
                                <h5 id="h5-sutitulo">6- Criação de imagens</h5>
                                <br>
                                <p id="p-corpo"><strong>&#8227; Prompt eficaz:</strong> "Crie uma ilustração de um animal
                                    selvagem em seu habitat natural, usando técnicas de pintura digital."<br><br>
                                    <strong>&#8227; Prompt ineficaz:</strong> "Faça uma imagem legal."
                                </p><br><br>
                                <p id="p-corpo"><strong>&#8227; Prompt eficaz:</strong> "Desenhe uma paisagem urbana
                                    noturna usando linhas e sombras para criar um efeito de profundidade."<br><br>
                                    <strong>&#8227; Prompt ineficaz:</strong> "Desenhe uma imagem urbana."
                                </p><br><br>
                                <p id="p-corpo"><strong>&#8227; Prompt eficaz:</strong> "Crie uma imagem abstrata usando
                                    formas geométricas e cores vivas para evocar um sentimento de alegria."<br><br>
                                    <strong>&#8227; Prompt ineficaz:</strong> "Crie uma imagem abstrata."
                                </p><br><br>

                                <!--linguagem de programação-->

                                <h5 id="corpo-texto1">Exemplos para linguagem de programação</h5>
                                <br>

                                <h5 id="h5-sutitulo">1- Classificação de tipos de variáveis</h5>
                                <br>
                                <p id="p-corpo"><strong>&#8227; Prompt eficaz:</strong> "Classifique as variáveis neste
                                    código como inteiras, strings ou booleanas."<br><br>
                                    <strong>&#8227; Prompt ineficaz:</strong> "O que este código faz?"
                                </p>
                                <br><br>
                                <h5 id="h5-sutitulo">2- Classificação de tipos de variáveis</h5>
                                <br>
                                <p id="p-corpo"><strong>&#8227; Prompt eficaz:</strong> "Escreva um código Python que
                                    calcule a média de uma lista de números."<br><br>
                                    <strong>&#8227; Prompt ineficaz:</strong> "Escreva um código."
                                </p>
                                <br><br>
                                <h5 id="h5-sutitulo">3- Resolução de problemas de programação</h5>
                                <br>
                                <p id="p-corpo"><strong>&#8227; Prompt eficaz:</strong> "Escreva um código que determine
                                    se um número é par ou ímpar."<br><br>
                                    <strong>&#8227; Prompt ineficaz:</strong> "Escreva um código para resolver um problema
                                    de matemática."
                                </p>
                                <br><br>
                                <h5 id="h5-sutitulo">4- Identificação de erros de sintaxe</h5>
                                <br>
                                <p id="p-corpo"><strong>&#8227; Prompt eficaz:</strong> "Identifique o erro de sintaxe
                                    nesta linha de código."<br><br>
                                    <strong>&#8227; Prompt ineficaz:</strong> "O que há de errado com este código?"
                                </p>
                                <br><br>
                                <h5 id="h5-sutitulo">5- Comentários de código:</h5>
                                <br>
                                <p id="p-corpo"><strong>&#8227; Prompt eficaz:</strong> "Adicione um comentário a este
                                    código que explique o que esta função faz."<br><br>
                                    <strong>&#8227; Prompt ineficaz:</strong> "Escreva algo sobre este código."
                                </p>
                                <br>
                                <h5 id="subtitulo">Para
                                    projetos em html, css e javascript você
                                    pode
                                    utilizar o nosso <a href="{{ route('editor') }}" style="color: #0070c0">editor</a>.
                                    Só
                                    precisar colar os códigos gerados e ao lado monstrará o resultado.

                                </h5>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<script>
    $(document).ready(function() {
        $('#pesquisarartigo').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#artigo-list #card-artigo').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
