<?php

//Exercício 13:
$salarios = [2500, 3200, 1800, 4500, 2900, 3700];

echo "Soma: ".array_sum($salarios)."\n";
echo "Média: ".array_sum($salarios)/count($salarios)."\n";
echo "Maior salário: ".max($salarios)."\n";
echo "Menor salário: ".min($salarios)."\n\n";

//Exercício 14:
$idades = [12, 18, 25, 15, 30, 17, 21, 16];

$maiores = array_filter($idades, function($idade) {
    return $idade > 18;
});

$reorganizado = array_values($maiores);
print_r($reorganizado);
echo "\n\n";

//Exercício 15:
$precos = [100, 250, 80, 320, 150];

$arrayDescontado = array_map(function($preco) {
    return $preco * 0.9; // Aplica 10% de desconto
}, $precos);

echo "Preços originais:\n";
foreach ($precos as $preco) {
    echo "R$ ".number_format($preco, 2, ",", ".")."\n";
}
echo "\n";

echo "Preços com desconto:\n";
foreach ($arrayDescontado as $preco) {
    echo "R$ ".number_format($preco, 2, ",", ".")."\n";
}
echo "\n\n";

//Exercício 16:
$alunos = [
    [
        "nome" => "João",
        "nota1" => 10.0,
        "nota2" => 9.5,
        "nota3" => 9.0
    ],

    [
        "nome" => "Maria",
        "nota1" => 8.5,
        "nota2" => 7.0,
        "nota3" => 9.0
    ],

    [
        "nome" => "Pedro",
        "nota1" => 6.0,
        "nota2" => 5.5,
        "nota3" => 7.0
    ],

    [
        "nome" => "Ana",
        "nota1" => 9.0,
        "nota2" => 8.5,
        "nota3" => 9.5
    ]
];

foreach ($alunos as $aluno) {
    $media = ($aluno["nota1"] + $aluno["nota2"] + $aluno["nota3"]) / 3;
    echo "Aluno: ".$aluno["nome"].", Média: ".number_format($media, 2, ",", ".")."\n";

    if ($media >= 7) {
        echo "Status: Aprovado\n\n";
    } else {
        echo "Status: Reprovado\n\n";
    }

    echo "-------------------------\n";
}
echo "\n\n";

//Exercício 17:
$estoque = [
    'Camiseta' => 50,
    'Calça' => 30,
    'Tênis' => 15,
    'Bone' => 80,
    'Meia' => 100
];

$chaves = array_keys($estoque);
$valores = array_values($estoque);

print_r($chaves);
echo "\n";
print_r($valores);
echo "\n\n";

//Exercício 18:
$disciplinas = ['PHP', 'JavaScript', 'Python', 'Java'];
$notas = [8.5, 7.0, 9.2, 6.8];

$pessoas = array_combine($disciplinas, $notas);

print_r($pessoas);
echo "\n\n";

//Exercício 19:
$itens = [
    [
        'nome' => 'Mouse',
        'preco' => 50.00
    ],
    [
        'nome' => 'Teclado',
        'preco' => 120.00
    ],

    [
        'nome' => 'Monitor',
        'preco' => 900.00
    ],

    [
        'nome' => 'Headset',
        'preco' => 200.00
    ]
];

$valorTotal = array_reduce($itens, function($total, $item) {
    return $total + $item['preco'];
}, 0);

echo "Valor total dos itens: R$ ".number_format($valorTotal, 2, ",", ".")."\n\n";