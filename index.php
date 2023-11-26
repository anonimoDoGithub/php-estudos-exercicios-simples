<?php
// Condicionais e Loops
$idade = 40;

if($idade < 18) {
    echo 'Você é maior de idade!'."<br/>";
}else {
    echo 'Você é menor de idade!'."<br/>";
};

$alunoA = 'Maria';

$p1AlunoA = 9;
$p2AlunoA = 9;
$p3AlunoA = 7;
$pSomaAlunoA = $p1AlunoA + $p2AlunoA + $p3AlunoA;

if ($pSomaAlunoA / 3 >= 8) {
    print_r("Parabéns <strong>$alunoA</strong> você <strong>PASSOU DE ANO!</strong>"."<br/>");
} else if ($pSomaAlunoA / 3 <= 7){
    echo "Atenção <strong>$alunoA</strong> você está de <strong>RECUPERAÇÃO!</strong>"."<br/>";
}

// Operador Ternário
$numero = 2 % 2 === 0 ? "O número é par!" : "O número é impar!" ;
echo $numero."<br/>";
$numero = 3 % 2 === 0 ? "O número é par!" : "O número é impar!" ;
print_r($numero."<br/>");

// NULL CAO - PHP 7.4 ou superior
$nome = 'Sergio';

$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome ?? ' Felipe'; // null cao - se a variavel existe use ela mesma!
echo $nomeCompleto."<br/>";

$funcionario = 'Sergio';
$cargo = 'CEO';
echo "Olá, $funcionario! Seu acesso de $cargo foi liberado!"."<br/>";
$civil = 'Ana';
$cargoVisitante = null;
$cargoVisitante .= $cargoVisitante ?? 'Visitante';
echo "Olá, $civil! Seu acesso de $cargoVisitante foi liberado!"."<br/>";

// Condicional SWITCH
$tipoDeArquivo = '';

switch ($tipoDeArquivo) {
    case '.txt':
        echo 'Carregando Arquivo.txt'."<br/>";
        break;
    case '.mp3':
        echo 'Carregando Arquivo.mp3'."<br/>";
        break;
    case '.mp4':
        echo 'Carregando Arquivo.mp4'."<br/>";
        break;
    case '.jpeg':
        echo 'Carregando Arquivo.jpeg'."<br/>";
        break;
    case null:
        echo 'Nenhum Arquivo Selecionado'."<br/>";
        break;
};

// Loop WHILE
$numeroParImpar = 0;

while ($numeroParImpar <= 20) {
    if($numeroParImpar % 2 === 0) {
        echo "O número $numeroParImpar é PAR!"."<br/>";
        $numeroParImpar += 1;
    }else {
        echo "O número $numeroParImpar é IMPAR!"."<br/>";
        $numeroParImpar += 1;
    }
};

// Loop FOR 1 Etapa - Definir uma variavel antes de começar o loop / 2 Etapa - Efetivamente um condição / 3 Etapa - Ao fim de { CADA RODADA DE BLOCO DE CODIGO }, ele vai EXECUTAR o codigo que eu colocar no [3 Etapa]
for($i = 21; $i <= 40; $i++) { // Nesse exemplo substitui $numeroParImpar por $i, para mostrar que funciona de uma forma mais simples.
    if($i % 2 === 0) {
        echo "O número $i é PAR!"."<br/>";
    }else {
        echo "O número $i é IMPAR!"."<br/>";
    }
};

// Loop FOREACH - Tem como único propósito trabalhar com ARRAYs
$listaDePresentes = ['Laptop', 'Tablet', 'Smartphone', 'Smartwatch', 'Microphone'];
print_r($listaDePresentes)."<br/>";

/* foreach($listaDePresentes as $listaDePresentes) {
    echo "Item da Lista: $listaDePresentes"."<br/>";
}; */
foreach($listaDePresentes as $chave => $valor) { // Uma outra forma para conseguir pegar CHAVE e VALOR, dentro do ARRAY.
    echo "Item da Lista $chave:  $valor"."<br/>";
}