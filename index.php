<?php
// Condicionais e Loops
$idade = 40;

if($idade < 18) {
    echo 'Você é maior de idade!'."<br/>";
}else {
    echo 'Você é menor de idade!'."<br/>";
};

$alunoA = 'Maria';
$alunoB = 'João';

$p1AlunoA = 9;
$p2AlunoA = 9;
$p3AlunoA = 7;
$pSomaAlunoA = $p1AlunoA + $p2AlunoA + $p3AlunoA;

$p1AlunoB = 9;
$p2AlunoB = 9;
$p3AlunoB = 9;
$pSomaAlunoB = $p1AlunoB + $p2AlunoB + $p3AlunoB;

if ($pSomaAlunoA / 3 >= 8) {
    print_r("Parabéns <strong>$alunoA</strong> você <strong>PASSOU DE ANO!</strong>"."<br/>");
} else if ($pSomaAlunoA / 3 <= 7){
    echo "Atenção <strong>$alunoA</strong> você está de <strong>RECUPERAÇÃO!</strong>"."<br/>";
}

// Operador Ternário
$numero = 2 % 2 === 0 ? "O número é par!" : "O número é impar!" ;
echo $numero."<br/>";
$numero = 3 % 2 === 0 ? "O número é par!" : "O número é impar!" ;
print_r($numero)."<br/>";