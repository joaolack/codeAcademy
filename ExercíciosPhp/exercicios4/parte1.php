<?php

//Exercício 1:
$frase1 = "Aprender PHP eh divertido !";
$frase2 = "Aprender PHP é divertido !";

echo strlen($frase1)."\n";
echo strlen($frase2)."\n";

echo mb_strlen($frase2)."\n\n";

//Exercício 2:

$hello = "Hello, World!";

echo strtoupper($hello)."\n";
echo strtolower($hello)."\n\n";

//Exercício 3:
$string1 = "programação web";
$string2 = "curso de desenvolvimento web";

echo ucfirst($string1)."\n\n";
echo ucwords($string2)."\n\n";

//Exercício 4:

$string3 = "abcdefghij";

echo substr($string3, 0, 3)."\n";
echo substr($string3, 3, 4)."\n";
echo substr($string3, -2)."\n\n";

//Exercício 5:
$string4 = "O rato roeu a roupa do rei de Roma";

echo strpos($string4, "roupa")."\n";
echo strripos($string4, "r")."\n\n";

//Exercício 6:
$string5 = "Eu gosto de Java";

echo str_replace("Java", "PHP", $string5)."\n";

$string6 = "Eu gosto de JAVA e java";
echo str_ireplace("java", "PHP", $string6)."\n\n";

//Exercício 7:
$string7 = "   Olá,  Mundo! ";

echo "trim(): [".trim($string7)."]\n";
echo "ltrim(): [".ltrim($string7)."]\n";
echo "rtrim(): [".rtrim($string7)."]\n\n";

//Exercício 8:

echo str_repeat("-", 40);
echo "\n";
echo str_repeat("*", 20);
echo "\n\n";

//Exercicio 9:
$string8 = "PHP";

echo strrev($string8);
echo "\n";

$texto = "arara";
if ($texto == strrev($texto)) {
    echo "A palavra '".$texto."' é um palíndromo.\n\n";
} else {
    echo "A palavra '".$texto."' não é um palíndromo.\n\n";
}

//Exercício 9:
$string9 = "banana";

$ana = substr_count($string9, "ana");
echo "A palavra 'ana' aparece ".$ana." vezes na string '".$string9."'.\n";

$a = substr_count($string9, "a");
echo "A letra 'a' aparece ".$a." vezes na string '".$string9."'.\n\n";
