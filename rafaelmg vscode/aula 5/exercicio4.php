<?php
function calcularRaizesEquacao($a, $b, $c) {
    // Calcula o discriminante
    $delta = $b * $b - 4 * $a * $c;

    // Verifica se é uma equação de segundo grau
    if ($a == 0) {
        return "Não é uma equação de segundo grau";
    } elseif ($delta < 0) {
        return "Não existe raiz real";
    } elseif ($delta == 0) {
        $raiz = -$b / (2 * $a);
        return "Raiz única: " . $raiz;
    } else {
        $raiz1 = (-$b + sqrt($delta)) / (2 * $a);
        $raiz2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Raízes reais: " . $raiz1 . " e " . $raiz2;
    }
}

// Coeficientes da equação (altere conforme necessário)
$a = 1;
$b = -3;
$c = 2;

// Chama a função para calcular as raízes da equação
echo calcularRaizesEquacao($a, $b, $c);
?>