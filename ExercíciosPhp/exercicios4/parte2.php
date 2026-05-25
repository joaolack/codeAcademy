<?php

//Exercício 11:
$nomes = "João,Maria,Pedro,Ana";
$nomesArray = explode(",", $nomes);

foreach ($nomesArray as $nome) {
    echo $nome."\n";
}
echo "\n\n";

//Exercício 12:
$arrayBase = ["HTML", "CSS", "JavaScript", "PHP"];
$arrayStr = implode(" | ", $arrayBase);

echo $arrayStr."\n\n";    

//Exercício 13:
$inicial = "42";

echo str_pad($inicial, 5, "0", STR_PAD_LEFT)."\n";
echo str_pad($inicial, 10, ".")."\n\n";

//Exercício 14:
$valor = 1234567.891;

echo number_format($valor, 2, ",", ".")."\n\n";

//Exercicio 15:
$string = "arquivo_relatorio.pdf";

if (str_starts_with($string, "arquivo")) {
    echo "A string começa com 'arquivo'.\n";
} else {
    echo "A string não começa com 'arquivo'.\n";
}

if (str_ends_with($string, ".pdf")) {
    echo "A string termina com '.pdf'.\n\n";
} else {
    echo "A string não termina com '.pdf'.\n\n";
}

//Exercicio 16:
$frase = "O PHP eh uma linguagem de programação server-side.";

if (str_contains($frase, "server-side")) {
    echo "A frase contém 'server-side'.\n";
} else {
    echo "A frase não contém 'server-side'.\n";
}

if (str_contains($frase, "client-side")) {
    echo "A frase contém 'client-side'.\n\n";
} else {
    echo "A frase não contém 'client-side'.\n\n";
}

//Exercício 17:
$string2 = "ABCDEFGHIJKLMNOPQRSTUVXYZ0123456789";

$stringEmbaralhada = str_shuffle($string2);

echo substr($stringEmbaralhada, 0, 8)."\n\n";

//Exercício 18:
$string3 = "PHP eh uma linguagem popular para desenvolvimento web.";

echo str_word_count($string3)."\n";

$palavras = explode(" ", $string3);

foreach ($palavras as $palavra) {
    echo $palavra."\n";
}
echo "\n\n";