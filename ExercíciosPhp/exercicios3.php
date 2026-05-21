<?php

//Exercício 1:

for ($i =1; $i <= 20; $i++) {
    echo $i."\n";
}
echo "\n\n";

//Exercício 2:

$contador = 10;

while ($contador >= 0) {
    echo $contador."\n";
    $contador--;
}

echo "Lançar!\n\n";

//Exercício 3:
$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $soma += $i;
    }
}

echo "Soma dos pares até 100: ".$soma."\n\n";

//Exercício 4:
$numero = 7;

for ($i = 1; $i <= 10; $i++) {
    $tabuada = $numero * $i;
    echo $numero." x ".$i." = ".$tabuada."\n";
}
echo "\n\n";

//Exercício 5:
$n = 6;
$fatorial = 1;

while ($n > 1) {
    $fatorial *= $n;
    $n--;
}

echo "6! = ".$fatorial."\n\n";

//Exercício 6:
for ($i = 1; $i <= 30; $i++){
    if ($i % 2 != 0) {
        echo $i."\n";
    }
}
echo "\n\n";

//Exercício 7:
$tentativas = [15, -3, 7];
$indice = 0;

do {
    $nota = $tentativas[$indice];

    if ($nota >= 0 && $nota <= 10){
        echo "Nota aceita: ".$nota."\n\n";
        break;
    }
    $indice++;

} while ($indice < count($tentativas));

//Exercício 8:
$somatoria = 0;

for ($i = 1; $i <= 100; $i++) {
    $somatoria += $i;
    if ($somatoria > 200) {
        echo $i."\n";
        echo "Acumulador: ".$somatoria."\n\n";
        break;
    }
}

//Exercício 9:
for ($i = 1; $i <= 20; $i++){
    if ($i % 3 == 0) {
        continue;
    }
    echo $i."\n";
}
echo "\n\n";

//Exercício 10:
$a = 0;
$b = 1;

for ($i = 1; $i <= 15; $i++) {
    echo $a." ";

    $proximo = $a + $b;
    $a = $b;
    $b = $proximo;

}
echo "\n\n";

//Exercício 11:
$notas = [8.5, 6.0, 9.2, 7.8, 5.5];
$somaNotas = 0;

foreach ($notas as $nota) {
    $somaNotas += $nota;
}

$media = $somaNotas / count($notas);
echo "Média das notas: ".$media."\n\n";

//Exercício 12:
$valores = [34, 12, 89, 3, 56, 71, 23];
$maior = $valores[0];
$menor = $valores[0];

foreach ($valores as $valor) {
    if ($valor > $maior) {
        $maior = $valor;
    }
    if ($valor < $menor) {
        $menor = $valor;
    }
}
echo "Maior valor: ".$maior."\n";
echo "Menor valor: ".$menor."\n\n";

//Exercício 13:
$original = "PHP e legal!";
$invertida = "";

for ($i = strlen($original) - 1; $i >= 0; $i--) {
    $invertida .= $original[$i];
}

echo "Original: ".$original."\n";
echo "Invertida: ".$invertida."\n\n";

//Exercício 14:

for ($i = 2; $i <= 50; $i++) {
    $primo = true;

    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0){
            $primo = false;
            break;
        }
    }

    if ($primo) {
        echo $i."\n";
    }

}
echo "\n\n";

//Exercício 15:
$aluno = [
    "nome" => "João",
    "idade" => 20,
    "curso" => "TADS",
    "media" => 8.5
]; 

foreach ($aluno as $chave => $valor) {
    echo $chave.": ".$valor."\n";
}