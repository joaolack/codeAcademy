<?php

// Exercício 1: 
$nome = "João";
$idade = 20;
$altura = 1.80;

echo "Meu nome é ".$nome.", tenho ".$idade." anos e minha altura é ".$altura." de altura. \n";


// Exercício 2: 
$variavel1 = 42;
$variavel2 = 3.14;
$variavel3 = "PHP";
$variavel4 = true;
$variavel5 = null;

echo "Variável 1: ".gettype($variavel1)."\n";
echo "Variável 2: ".gettype($variavel2)."\n";
echo "Variável 3: ".gettype($variavel3)."\n";
echo "Variável 4: ".gettype($variavel4)."\n";
echo "Variável 5: ".gettype($variavel5)."\n";

// Exercício 3:


$weight = 84.5;
$height = 1.75;

$imc = $weight / ($height * $height);

echo "O IMC é: ".number_format($imc, 2)."\n";

// Exercício 4:

$a = 10;
$b = 20;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "Valor de a: ".$a."\n";
echo "Valor de b: ".$b."\n";

// Exercício 5:

$celsius = 25;
$fahrenheit = ($celsius * 9/5) + 32;
$kelvin = $celsius + 273.15;

echo "Celsius: ".number_format($celsius, 2)."°C\n";
echo "Fahrenheit: ".number_format($fahrenheit, 2)."°F\n";
echo "Kelvin: ".number_format($kelvin, 2)."°K\n";

// Exercício 6:

$x = "10";
$y = 10;

//o php converte os tipos automaticamente para comparação, então $x e $y são considerados iguais em valor, mas não em tipo.
echo '$x == $y:';
var_dump($x == $y);

//o operador === verifica tanto o valor quanto o tipo, string é diferente de int
echo '$x === $y:';
var_dump($x === $y);

//o operador != verifica se os valores são diferentes, mas não os tipos, então $x e $y são considerados iguais em valor, portanto a comparação é falsa.
echo '$x != $y:';
var_dump($x != $y);

//o operador !== verifica se os valores ou os tipos são diferentes, então $x e $y são considerados diferentes em tipo, portanto a comparação é verdadeira.
echo '$x !== $y:';
var_dump($x !== $y);

// Exercício 7:

$numero = 5;

if ($numero % 2 == 0) {
    echo "O número ".$numero." é par.\n\n";
} else {
    echo "O número ".$numero." é ímpar.\n\n";
}

// Exercício 8:

$valor = "123abc";

$inteiro = (int)$valor;
$float = (float)$valor;
$booleano = (bool)$valor;

var_dump($inteiro);
var_dump($float);
var_dump($booleano);
echo "\n\n";

$valorVazio = "";

$inteiro = (int)$valorVazio;
$float = (float)$valorVazio;
$booleano = (bool)$valorVazio;

var_dump($inteiro);
var_dump($float);
var_dump($booleano);
echo "\n\n";

$valorZero = 0;

$inteiro = (int)$valorZero;
$float = (float)$valorZero;
$booleano = (bool)$valorZero;

var_dump($inteiro);
var_dump($float);
var_dump($booleano);
echo "\n\n";

// Exercício 9:

$total = 100;

$total += 50;
echo "Adição: ".$total."\n";

$total -= 30;
echo "Subtração: ".$total."\n";

$total *= 2;
echo "Multiplicação: ".$total."\n";

$total /= 4;
echo "Divisão: ".$total."\n";

$total %= 7;
echo "Resto da divisão: ".$total."\n";

$total = (string)$total;
echo $total." reais\n\n";

// Exercício 10:

$possuiCNH = true;
$estaBebado = false;

if ($possuiCNH && !$estaBebado) {
    echo "Pode dirigir.\n\n";
} else {
    echo "Precisa de carona.\n\n";
}

// Exercício 11:

$contador = 5;

//Pós-incremento: primeiro exibe o valor, depois soma +1
echo "Pós-incremento: ".$contador++."\n";
echo "Valor atual do contador: ".$contador."\n";
 
//Pré-incremento: primeiro soma +1, depois exibe o valor
echo "Pré-incremento: ".++$contador."\n";
echo "Valor atual do contador: ".$contador."\n";

//Pós-decremento: primeiro exibe o valor, depois subtrai -1
echo "Pós-decremento: ".$contador--."\n";
echo "Valor atual do contador: ".$contador."\n";

//Pré-decremento: primeiro subtrai -1, depois exibe o valor
echo "Pré-decremento: ".--$contador."\n";
echo "Valor atual do contador: ".$contador."\n\n";

// Exercício 12:

$produto = "Notebook";
$preco = 3500.99;

echo "O produto ".$produto." custa R$ ".$preco."\n";
echo "O produto $produto custa R$$preco\n\n";

// Exercício 13:

$precoOriginal = 250.0;
$desconto = 15;

$valorDesconto = ($precoOriginal * $desconto) / 100;
$precoFinal = $precoOriginal - $valorDesconto;

echo "Preço original: R$ ".number_format($precoOriginal, 2)."\n";
echo "Valor do desconto: R$ ".number_format($valorDesconto, 2)."\n";
echo "Preço final: R$ ".number_format($precoFinal, 2)."\n";

echo ($precoFinal < 200) ? "Compra barata" : "Compra cara";
echo "\n\n";

// Exercício 14:

$var1 = 10;
$var2 = "Olá mundo";
$var3 = 3.14;

echo "\$var1 ($var1): "
    . "is_int ". (is_int($var1) ? "Sim" : "Não")."|"
    . "is_float ". (is_float($var1) ? "Sim" : "Não")."|"
    . "is_string ". (is_string($var1) ? "Sim" : "Não")."|"
    . "is_bool ". (is_bool($var1) ? "Sim" : "Não")."|"
    . "is_null ". (is_null($var1) ? "Sim" : "Não")."|"
    . "is_numeric ". (is_numeric($var1) ? "Sim" : "Não")."\n";

echo "\$var2 ($var2): "
    . "is_int ". (is_int($var2) ? "Sim" : "Não")."|"
    . "is_float ". (is_float($var2) ? "Sim" : "Não")."|"
    . "is_string ". (is_string($var2) ? "Sim" : "Não")."|"
    . "is_bool ". (is_bool($var2) ? "Sim" : "Não")."|"
    . "is_null ". (is_null($var2) ? "Sim" : "Não")."|'"
    . "is_numeric ". (is_numeric($var2) ? "Sim" : "Não")."\n"; 

echo "\$var3 ($var3): "
    . "is_int ". (is_int($var3) ? "Sim" : "Não")."|"
    . "is_float ". (is_float($var3) ? "Sim" : "Não")."|"
    . "is_string ". (is_string($var3) ? "Sim" : "Não")."|"
    . "is_bool ". (is_bool($var3) ? "Sim" : "Não")."|"
    . "is_null ". (is_null($var3) ? "Sim" : "Não")."|"
    . "is_numeric ". (is_numeric($var3) ? "Sim" : "Não")."\n\n";

// Exercício 15:

$nomeUsuario = "João";
// $cidadeUsuario = "Guarapuava";
$idadeUsuario = 20;

$nome = $nomeUsuario ?? "Visitante";
$cidade = $cidadeUsuario ?? "Cidade não informada";
$idade = $idadeUsuario ?? "Idade não informada";

echo "Nome: ".$nome."\n";
echo "Cidade: ".$cidade."\n";
echo "Idade: ".$idade."\n\n";

// Exercício 16:

$valorTotal = 1899.90;
$numParcelas = 6;

$valorParcela = $valorTotal / $numParcelas;

echo "Valor da parcela: R$ ".number_format($valorParcela, 2)."\n\n";

//floor() arredonda para baixo
$parcelaFloor = floor($valorParcela);
echo "Usando floor(): R$$parcelaFloor\n";

$totalFloor = $parcelaFloor * $numParcelas;
echo "Valor total usando floor(): R$$totalFloor\n";

$centavoPerdidoFloor = $valorTotal - $totalFloor;
echo "Diferença: R$".number_format($centavoPerdidoFloor, 2)."\n\n";

//ceil() arredonda para cima
$parcelaCeil = ceil($valorParcela);
echo "Usando ceil(): R$$parcelaCeil\n";

$totalCeil = $parcelaCeil * $numParcelas;
echo "Valor total usando ceil(): R$$totalCeil\n";

$centavoPerdidoCeil = $valorTotal - $totalCeil;
echo "Diferença: R$".number_format($centavoPerdidoCeil, 2)."\n\n";

//round() arredonda para o inteiro mais próximo
$parcelaRound = round($valorParcela);
echo "Usando round(): R$$parcelaRound\n";

$totalRound = $parcelaRound * $numParcelas;
echo "Valor total usando round(): R$$totalRound\n";

$centavoPerdidoRound = $valorTotal - $totalRound;
echo "Diferença: R$".number_format($centavoPerdidoRound, 2)."\n\n";

// Exercício 17:

$nota1 = 7.5;
$nota2 = 8.0;
$nota3 = 6.5;

$media = ($nota1 + $nota2 + $nota3) / 3;

$resultado = ($media >= 7)
    ? "Aprovado"
    : (($media >= 5) ? "Recuperação" : "Reprovado");

echo "Média: ".number_format($media, 1)."\n";
echo "Resultado: ".$resultado."\n\n";
