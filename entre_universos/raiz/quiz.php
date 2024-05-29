<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Quiz</title>
    <style>
        body {
            background-color: #d2ffc9;
        }

        .cor1 {
            background-color: #D7C2EF;
        }

        .cor2 {
            background-color: #E3E1FF;
        }

        .cor3 {
            background-color: #FEE6AC;
        }

        h1 {
            margin-top: 60px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: #ab92f3;
            font-size: 70px;
            text-align: center;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
        }

        .background-img {
            background-color: #C7A6EE;
            padding: 5px;
            width: 150px;
            height: 150px;
            border-radius: 10px;
            margin: 5px;
            border: 2px solid #565656;

        }

        .background-img2 {
            background-color: #D2FFC9;
            padding: 5px;
            width: 150px;
            height: 150px;
            border-radius: 10px;
            margin: 5px;
            border: 2px solid #565656;
        }

        .background-img3 {
            background-color: #f3e4eb;
            padding: 5px;
            width: 150px;
            height: 150px;
            border-radius: 10px;
            margin: 5px;
            border: 2px solid #565656;
        }

        .respostaBotao {
            background-color: transparent;
            width: 170px;
            height: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-left: 270px;
        }


        .legenda {
            font-size: 18px;
            text-align: center;
            margin-top: 5px;
            color: #565656;
            font-weight: bold;
            font-family: system-ui,
        }


        #pergunta {
            color: #FFAAD7;
            text-shadow: -1px -1px 0 #565656, 1px -1px 0 #565656, -1px 1px 0 #565656, 1px 1px 0 #565656;
            font-size: 33px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>

</head>
<?php include_once 'navbar.php'; ?>

<body>
    <h1 style="align-items: center;">
        <i class="fas fa-star" style="color: #efe5ae; font-size:40px;"></i>
        Universo dos Livros
        <i class="fas fa-star" style="color: #efe5ae; font-size:40px;"></i>
    </h1>\

    <!-- Aqui vc pode mudar o "local/design" das perguntas no site -->
    <div style="display: block; text-align: center; margin-top: 100px;" id="pergunta"></div>

    <!-- Aqui vc pode mudar o "local/design" dos botões no site -->
    <div style="display: flex; justify-content: center; margin-top: 50px;" id="botoesResposta">
        <div style="flex: 1;">
            <div id="botaoEsquerda"></div>
        </div>
        <div style="flex: 2;">
            <div id="botaoDireita"></div>
        </div>
    </div>

    <script>
        var perguntas = [{
                pergunta: "Qual o genêro do livro?",
                respostas: [{
                        imagem: "<img src='../img/amor.png' class='background-img'>",
                        legenda: "Romance"
                    },
                    {
                        imagem: "<img src='../img/er.png' class='background-img'>",
                        legenda: "Fantasia"
                    },
                    {
                        imagem: "<img src='../img/pu.png' class='background-img'>",
                        legenda: "Kids"
                    },
                    {
                        imagem: "<img src='../img/po.png' class='background-img'>",
                        legenda: "Mistério"
                    },
                    {
                        imagem: "<img src='../img/piu.png' class='background-img'>",
                        legenda: "Terror"
                    },
                    {
                        imagem: "<img src='../img/ol.png' class='background-img'>",
                        legenda: "Outros"
                    }
                ]
            },
            {
                pergunta: "Qual o sub-genêro do livro?",
                respostas: [{
                        imagem: "<img src='../img/chapeu.png' class='background-img2'>",
                        legenda: "Mistério"
                    },
                    {
                        imagem: "<img src='../img/casal.png' class='background-img2'>",
                        legenda: "Romance"
                    },
                    {
                        imagem: "<img src='../img/faca.png' class='background-img2'>",
                        legenda: "Terror"
                    },
                    {
                        imagem: "<img src='../img/castelo.png' class='background-img2'>",
                        legenda: "Fantasia"
                    },
                    {
                        imagem: "<img src='../img/nave.png' class='background-img2'>",
                        legenda: "Ficção Científica"
                    },
                    {
                        imagem: "<img src='../img/mundo.png' class='background-img2'>",
                        legenda: "Outros"
                    }
                ]
            },
            {
                pergunta: "Qual a característica do livro?",
                respostas: [{
                        imagem: "<img src='../img/gravidez.png' class='background-img3'>",
                        legenda: "Gravidez"
                    },
                    {
                        imagem: "<img src='../img/religion.png' class='background-img3'>",
                        legenda: "Religioso"
                    },
                    {
                        imagem: "<img src='../img/shocked.png' class='background-img3'>",
                        legenda: "Plot Twist"
                    },
                    {
                        imagem: "<img src='../img/adolescente.png' class='background-img3'>",
                        legenda: "Adolescente"
                    },
                    {
                        imagem: "<img src='../img/happy.png' class='background-img3'>",
                        legenda: "Final Feliz"
                    },
                    {
                        imagem: "<img src='../img/snail.png' class='background-img3'>",
                        legenda: "Slow Burn"
                    }
                ]
            }
        ];

        var cores = ['cor1', 'cor2', 'cor3'];
        var indiceCorAtual = 0;
        var indicePerguntaAtual = 0;
        var respostasSelecionadas = [];
        var perguntaElement = document.getElementById('pergunta');


        function exibirProximaPergunta() {
            if (indicePerguntaAtual < perguntas.length) {
                var perguntaAtual = perguntas[indicePerguntaAtual];
                perguntaElement.textContent = perguntaAtual.pergunta;

                botaoEsquerda.innerHTML = "";
                botaoDireita.innerHTML = "";

                var numRespostas = perguntaAtual.respostas.length;
                var metade = Math.ceil(numRespostas / 2);

                for (var i = 0; i < numRespostas; i++) {
                    var botao = document.createElement('button');
                    botao.className = 'respostaBotao';
                    botao.innerHTML = perguntaAtual.respostas[i].imagem;
                    var legenda = document.createElement('div');
                    legenda.textContent = perguntaAtual.respostas[i].legenda;
                    legenda.className = 'legenda';
                    botao.appendChild(legenda);
                    botao.addEventListener('click', responderPergunta);

                    if (i < metade) {
                        botaoEsquerda.appendChild(botao);
                    } else {
                        botaoDireita.appendChild(botao);
                    }
                }
            } else {
                document.getElementById('botoesResposta').style.display = 'none';
                perguntaElement.textContent = "Fim do Quiz! Livros Selecionados:";
                var respostasSelecionadasTexto = "Respostas selecionadas: " + respostasSelecionadas.join(", ");
                perguntaElement.insertAdjacentHTML('afterend', '<div>' + respostasSelecionadasTexto + '</div>');
            }
        }

        function responderPergunta() {
            var respostaIndex = Array.from(document.querySelectorAll('.respostaBotao')).indexOf(this);
            var respostaSelecionada = perguntas[indicePerguntaAtual].respostas[respostaIndex].legenda;
            respostasSelecionadas.push(respostaSelecionada);
            console.log("Resposta selecionada: " + respostaSelecionada);

            var cor = cores[indiceCorAtual];
            document.body.className = cor;
            indiceCorAtual = (indiceCorAtual + 1) % cores.length;

            indicePerguntaAtual++;
            exibirProximaPergunta();
        }

        exibirProximaPergunta();
    </script>
</body>

</html>