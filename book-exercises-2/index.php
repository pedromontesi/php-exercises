<?php
$jogador1 = 'Mario';
$jogador2 = 'Luigi';
$jogador3 = 'Peach';

$jogadorAtivo = 'jogador1';

$nomeJogador = $$jogadorAtivo;

echo "Jogador ativo: $nomeJogador\n";

$pontuacao = 0;

$acao = "pulo";
switch($acao) {
    case "pulo":
        $pontuacao += 10;
        break;
    case "moeda":
        $pontuacao += 5;
        break;
    case "estrela":
        $pontuacao += 50;
        break;
    case "dano":
        $pontuacao -= 20;
        break;
    default:
        $pontuacao += 0;
}

$acao = "moeda";
switch($acao) {
    case "pulo":
        $pontuacao += 10;
        break;
    case "moeda":
        $pontuacao += 5;
        break;
    case "estrela":
        $pontuacao += 50;
        break;
    case "dano":
        $pontuacao -= 20;
        break;
    default:
        $pontuacao += 0;
}

$acao = "estrela";
switch($acao) {
    case "pulo":
        $pontuacao += 10;
        break;
    case "moeda":
        $pontuacao += 5;
        break;
    case "estrela":
        $pontuacao += 50;
        break;
    case "dano":
        $pontuacao -= 20;
        break;
    default:
        $pontuacao += 0;
}

$acao = "pulo";
switch($acao) {
    case "pulo":
        $pontuacao += 10;
        break;
    case "moeda":
        $pontuacao += 5;
        break;
    case "estrela":
        $pontuacao += 50;
        break;
    case "dano":
        $pontuacao -= 20;
        break;
    default:
        $pontuacao += 0;
}

$acao = "dano";
switch($acao) {
    case "pulo":
        $pontuacao += 10;
        break;
    case "moeda":
        $pontuacao += 5;
        break;
    case "estrela":
        $pontuacao += 50;
        break;
    case "dano":
        $pontuacao -= 20;
        break;
    default:
        $pontuacao += 0;
}

echo "Pontuação final de $nomeJogador: $pontuacao pontos\n";
?>