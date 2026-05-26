<?php

//Exercício 1:

$frutas = ["Maçã", "Banana", "Laranja", "Uva", "Abacaxi"];

foreach ($frutas as $fruta) {
    echo $fruta."\n";
}
echo "\n\n";

//Exercício 2:

$associativo = [
    "João" => 25,
    "Maria" => 30,
    "Pedro" => 22,
    "Ana" => 28
];

foreach ($associativo as $nome => $idade) {
    echo "Nome: ".$nome.", Idade: ".$idade."\n";
}
echo "\n\n";

//Exercício 3:
$cores = ['vermelho', 'azul', 'verde'];

array_push($cores, 'amarelo');
array_unshift($cores, 'preto');

print_r($cores);
echo "\n\n";

//Exercício 4:
$numeros = [10, 20, 30, 40, 50];

array_shift($numeros);
array_pop($numeros);

print_r($numeros);
echo "\n\n";

//Exercício 5:
$array = [34, 19, 3, 67, 69, 23, 9, 25];

$total = count($array);

echo "Total de elementos: ".$total."\n";
echo "Maiores que 10: \n";
foreach ($array as $numero) {
    if ($numero > 10) {
        echo $numero."\n";
    }
}
echo "\n\n";

//Exercicio 6:
$cidades = ["São Paulo", "Rio de Janeiro", "Curitiba", "Belo Horizonte", "Salvador"];

if (in_array("Curitiba", $cidades)) {
    echo "Curitiba está presente no array.\n";
} else {
    echo "Curitiba não está presente no array.\n";
}

$posicao = array_search("Curitiba", $cidades);
echo "A posição de Curitiba no array é: ".$posicao."\n\n";

//Exercício 7:
$notas = [7.5, 3.2, 9.8, 5.0, 8.1, 6.7];

$crescente = sort($notas);
print_r($notas);

$descrescente = rsort($notas);
print_r($notas);
echo "\n\n";

//Exercício 8:

$produtos = [
    "Suco" => 3.50,
    "Pão" => 2.00,
    "Leite" => 4.20,
    "Café" => 5.00,
    "Bolo" => 15.00
];

asort($produtos);

foreach ($produtos as $produto => $preco) {
    echo $produto.", Preço: R$ ".$preco."\n";
}
echo "\n\n";

//Exercício 9:
$letras = ["A", "B", "C", "D", "E", "F", "G", "H"];

$newArray = array_slice($letras, 1, 4);

print_r($newArray);
echo "\n\n";

//Exercício 10:
$turmaA = ["Ana", "Bruno", "Carlos"];
$turmaB = ["Diana", "Eduardo", "Fernanda"];

$turmaMergeada = array_merge($turmaA, $turmaB);
print_r($turmaMergeada);
echo "\n\n";

//Exercício 11:
$tags = ["php", "html", "css", "php", "javascript", "html", "css", "python"];

$resultado = array_values(array_unique($tags));
print_r($resultado);
echo "\n\n";

//Exercício 12:
$fila = ["primeiro", "segundo", "terceiro", "quarto", "quinto"];

$nativo = array_reverse($fila);
echo "Invertido com função nativa:\n";
for ($i = 0; $i < count($nativo); $i++) {
    echo $nativo[$i]."\n";
}
echo "\n\n";

echo "Invertido manualmente com loop:\n";
for ($i = count($fila) - 1; $i >= 0; $i--) {
    echo $fila[$i]."\n";
}
echo "\n\n";