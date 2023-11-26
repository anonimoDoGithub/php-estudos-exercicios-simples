<?php
// Condicionais e Loops
$idade = 40;

if($idade < 18) {
    echo 'Você é maior de idade!'."<br/>";
}else {
    echo 'Você é menor de idade!'."<br/>";
};

// Operador Ternário
$numero = 2 % 2 === 0 ? "O número é par!" : "O número é impar!" ;
echo $numero."<br/>";
$numero = 3 % 2 === 0 ? "O número é par!" : "O número é impar!" ;
print_r($numero)."<br/>";