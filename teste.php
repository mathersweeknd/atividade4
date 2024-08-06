<?php
// 1. Maior entre dois números
$num1 = 10;
$num2 = 20;

if ($num1 > $num2) {
    echo "1. O maior número é $num1\n";
} else {
    echo "1. O maior número é $num2\n";
}

// 2. Positivo ou negativo
$valor = -5;

if ($valor > 0) {
    echo "2. O valor é positivo\n";
} elseif ($valor < 0) {
    echo "2. O valor é negativo\n";
} else {
    echo "2. O valor é zero\n";
}

// 3. Identificação de gênero
$letra = 'M';

switch (strtoupper($letra)) {
    case 'F':
        echo "3. Feminino\n";
        break;
    case 'M':
        echo "3. Masculino\n";
        break;
    default:
        echo "3. Sexo inválido\n";
        break;
}

// 4. Vogal ou consoante
$letra = 'a';

$vogais = array('a', 'e', 'i', 'o', 'u');

if (in_array(strtolower($letra), $vogais)) {
    echo "4. A letra é uma vogal\n";
} else {
    echo "4. A letra é uma consoante\n";
}

// 5. Média de notas
$nota1 = 8.0;
$nota2 = 9.5;

$media = ($nota1 + $nota2) / 2;

if ($media == 10) {
    echo "5. Aprovado com Distinção\n";
} elseif ($media >= 7) {
    echo "5. Aprovado\n";
} else {
    echo "5. Reprovado\n";
}

// 6. Maior entre três números
$num1 = 5;
$num2 = 8;
$num3 = 12;

$maior = max($num1, $num2, $num3);

echo "6. O maior número é $maior\n";

// 7. Maior e menor entre três números
$num1 = 7;
$num2 = 3;
$num3 = 9;

$maior = max($num1, $num2, $num3);
$menor = min($num1, $num2, $num3);

echo "7. O maior número é $maior\n";
echo "7. O menor número é $menor\n";

// 8. Escolhendo o produto mais barato
$preco1 = 100.00;
$preco2 = 150.00;
$preco3 = 90.00;

$maisBarato = min($preco1, $preco2, $preco3);

echo "8. O produto mais barato custa R$ $maisBarato\n";

// 9. Ordem decrescente
$num1 = 15;
$num2 = 9;
$num3 = 20;

$numeros = array($num1, $num2, $num3);
rsort($numeros);

echo "9. Os números em ordem decrescente são: " . implode(", ", $numeros) . "\n";

// 10. Turno de estudo
$turno = 'V';

switch (strtoupper($turno)) {
    case 'M':
        echo "10. Bom dia!\n";
        break;
    case 'V':
        echo "10. Boa Tarde\n";
        break;
    case 'N':
        echo "10. Boa Noite\n";
        break;
    default:
        echo "10. Valor inválido\n";
        break;
}

// 11. Reajuste salarial
$salario = 1000.00;

if ($salario <= 280) {
    $percentual = 20;
} elseif ($salario <= 700) {
    $percentual = 15;
} elseif ($salario <= 1500) {
    $percentual = 10;
} else {
    $percentual = 5;
}

$aumento = ($salario * $percentual) / 100;
$novoSalario = $salario + $aumento;

echo "11. Salário antes do reajuste: R$ $salario\n";
echo "11. Percentual de aumento: $percentual%\n";
echo "11. Valor do aumento: R$ $aumento\n";
echo "11. Novo salário: R$ $novoSalario\n";

// 12. Calculadora de IMC
$peso = 70; // em kg
$altura = 1.75; // em metros

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "12. Abaixo do peso\n";
} elseif ($imc < 25) {
    echo "12. Peso normal\n";
} elseif ($imc < 30) {
    echo "12. Sobrepeso\n";
} else {
    echo "12. Obesidade\n";
}

// 13. Verificação de número primo
$numero = 29;

function isPrimo($n) {
    if ($n <= 1) return false;
    if ($n <= 3) return true;
    if ($n % 2 == 0 || $n % 3 == 0) return false;
    for ($i = 5; $i * $i <= $n; $i += 6) {
        if ($n % $i == 0 || $n % ($i + 2) == 0) return false;
    }
    return true;
}

if (isPrimo($numero)) {
    echo "13. $numero é um número primo\n";
} else {
    echo "13. $numero não é um número primo\n";
}

// 14. Conversão de temperatura
$celsius = 25;

$fahrenheit = ($celsius * 9/5) + 32;

echo "14. $celsius graus Celsius é igual a $fahrenheit graus Fahrenheit\n";

// 15. Contagem regressiva
$numero = 10;

for ($i = $numero; $i >= 0; $i--) {
    echo "15. $i\n";
}
?>
