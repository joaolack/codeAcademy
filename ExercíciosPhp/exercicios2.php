<?php

//Exercício 1:

$idade = 17;

if ($idade >= 18) {
    echo "Maior de idade\n\n";
} else {
    echo "Menor de idade\n\n";
}

//Exercício 2:

$nota = 7.5;

if ($nota >= 7){
    echo "Aprovado\n\n";
} elseif ($nota >= 5 && $nota < 7) {
    echo "Recuperação\n\n";
} else {
    echo "Reprovado\n\n";
}

//Exercício 3:

$numero = 15;

$resultado = ($numero % 2 == 0) ? "Par" : "Impar";
echo $resultado."\n\n";

//Exercicio 4:

$x = 42;
$y = "Olá";
$z = true;

//$x
if (gettype($x) == "integer" ) {
    echo "A variavel x é do tipo inteiro\n\n";
} elseif (gettype($x) == "string") {
    echo "A variavel x é do tipo string\n\n";
} elseif (gettype($x) == "boolean") {
    echo "A variavel x é do tipo booleano\n\n";
} else {
    echo "A variavel x é de outro tipo\n\n";
}

//$y
if (gettype($y) == "integer" ) {
    echo "A variavel y é do tipo inteiro\n\n";
} elseif (gettype($y) == "string") {
    echo "A variavel y é do tipo string\n\n";
} elseif (gettype($y) == "boolean") {
    echo "A variavel y é do tipo booleano\n\n";
} else {
    echo "A variavel y é de outro tipo\n\n";
}

//$z
if (gettype($z) == "integer" ) {
    echo "A variavel z é do tipo inteiro\n\n";
} elseif (gettype($z) == "string") {
    echo "A variavel z é do tipo string\n\n";
} elseif (gettype($z) == "boolean") {
    echo "A variavel z é do tipo booleano\n\n";
} else {
    echo "A variavel z é de outro tipo\n\n";
}

//Exercício 5:

$dia = 3;

switch ($dia) {
    case 1:
        echo "Segunda-feira\n\n";
        break;
    case 2:
        echo "Terça-feira\n\n";
        break;
    case 3:
        echo "Quarta-feira\n\n";
        break;
    case 4:
        echo "Quinta-feira\n\n";
        break;
    case 5:
        echo "Sexta-feira\n\n";
        break;
    case 6:
        echo "Sábado\n\n";
        break;
    case 7:
        echo "Domingo\n\n";
        break;
    default:
        echo "Dia inválido\n\n";
}

//Exercício 6:
$a = "10";
$b = 10;

// == compara apenas o conteúdo da variavel.
if ($a == $b) {
    echo "As variáveis são iguais em valor\n\n";
} else {
    echo "As variáveis são diferentes em valor\n\n";
}

// === compara o conteúdo e o tipo da variavel.
if ($a === $b) {
    echo "As variáveis são iguais em valor e tipo\n\n";
} else {
    echo "As variáveis são diferentes em valor ou tipo\n\n";
}

//Exercício 7:

$peso = 75;
$altura = 1.80;

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Abaixo do peso\n\n";
} elseif ($imc >= 18.5 && $imc < 24.9) {
    echo "Peso normal\n\n";
} elseif ($imc >= 25 && $imc < 29.9) {
    echo "Sobrepeso\n\n";
} else {
    echo "Obesidade\n\n";
}

//Exercício 8:

$usuario = "admin";
$senha = "1234";

if ($usuario == "admin" && $senha == "1234") {
    echo "Acesso permitido\n\n";
} else {
    echo "Acesso negado\n\n";
}

//Exercicio 9:

$nome = null;

$saudacao = $nome ?? "Visitante";

echo "Olá, ".$saudacao."!\n\n";

//Exercício 10:
$preco = 250;

if ($preco > 500) {
    $desconto = 15;
} elseif ($preco >= 200 && $preco <= 500) {
    $desconto = 10;
} else {
    $desconto = 5;
}

$precoDescontado = $preco - ($preco * $desconto / 100);

echo "Preço original: R$ " . number_format($preco, 2, ',', '.') . "\n";
echo "Desconto aplicado: " . $desconto . "%\n";
echo "Preço final: R$ " . number_format($precoDescontado, 2, ',', '.') . "\n\n";

//Exercício 11:
$celsius = 36.5;
$tipo = "F";

if ($tipo == "F") {
    $fahrenheit = ($celsius * 9/5) + 32;
    echo $celsius."°C é igual a ".number_format($fahrenheit, 2)."°F\n\n";
} elseif ($tipo == "K") {
    $kelvin = $celsius + 273.15;
    echo $celsius."°C é igual a ".number_format($kelvin, 2)."K\n\n";
} else {
    echo "Tipo de conversão inválido. Use 'F' para Fahrenheit ou 'K' para Kelvin.\n\n";
}

//Exercício 12:
$total = 100;

$total += 50;
echo $total."\n";

$total -= 30;
echo $total."\n";

$total *= 2;
echo $total."\n";

$total /= 4;
echo $total."\n\n";

//Exercício 13:
$lado1 = 5;
$lado2 = 5;
$lado3 = 8;

if (
    $lado1 + $lado2 > $lado3 &&
    $lado1 + $lado3 > $lado2 &&
    $lado2 + $lado3 > $lado1
) {
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "Triângulo Equilátero\n\n";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "Triângulo Isósceles\n\n";
    } else {
        echo "Triângulo Escaleno\n\n";

    }

} else {
    echo "Os lados não formam um triângulo\n\n";
}

//Exercício 14:
$idade = 25;

if ($idade <= 11) {
    echo "Criança\n\n";
} elseif ($idade >= 12 && $idade <= 17) {
    echo "Adolescente\n\n";
} elseif ($idade >= 18 && $idade <= 29) {
    echo "Jovem adulto\n\n";
} elseif ($idade >= 30 && $idade <= 59) {
    echo "Adulto\n\n";
} else {
    echo "Idoso\n\n";
}

//Exercício 15:
$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "FizzBuzz\n\n";
} elseif ($num % 3 == 0) {
    echo "Fizz\n\n";
} elseif ($num % 5 == 0) {
    echo "Buzz\n\n";
} else {
    echo $num."\n\n";
}
