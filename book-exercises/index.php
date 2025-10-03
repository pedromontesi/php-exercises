<?php

$pessoa = [
    "nome" => "Maria",
    "idade" => 25,
    "profissao" => "Engenheira"
];

// 1) Mostre o nome, idade e profissão usando echo
echo $pessoa["nome"] . "<br>" .
     $pessoa["idade"] . "<br>" .
     $pessoa["profissao"] . "<br>";

// 2) Mostre o nome, idade e profissão usando print
print $pessoa["nome"] . "<br>";
print $pessoa["idade"] . "<br>";
print $pessoa["profissao"] . "<br>";

// 3) Mostre o array completo usando print_r
print_r($pessoa);
echo "<br>";

// 4) Mostre o array completo usando var_dump
var_dump($pessoa);
echo "<br>";

// 5) Crie variáveis dinâmicas ($$variavel) a partir das chaves do array
// Ex: $nome = "Maria", $idade = 25, $profissao = "Engenheira"

// Corrigindo nomes e ponto e vírgula faltando
$variableName = 'nome';
$variableAge = 'idade';
$variableWork = 'profissao';


$$variableName = $pessoa["nome"];
$$variableAge = $pessoa["idade"];
$$variableWork = $pessoa["profissao"];

// 6) Mostre as variáveis criadas usando echo
echo $nome . "<br>";       
echo $idade . "<br>";     
echo $profissao . "<br>";  

// 7) Crie uma referência ($idade_ref) que aponte para $pessoa["idade"]
$idade_ref = &$pessoa["idade"];

// 8) Altere $idade_ref para outro valor e mostre:
//    - A idade original ($idade)
//    - A idade dentro do array
//    - A idade via referência

$idade_ref = 20;

echo "Idade original (variável \$idade): $idade <br>";       
echo "Idade dentro do array: " . $pessoa["idade"] . "<br>"; 
echo "Idade via referência: $idade_ref <br>";                
