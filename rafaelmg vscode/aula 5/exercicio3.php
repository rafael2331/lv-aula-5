<?php
function calcularAumentoSalario($salarioAtual, $tempoServico) {
    // Tabela de aumento de salário baseado no tempo de serviço
    $aumentoPorAno = 100; // Aumento de R$ 100 por ano de serviço

    // Calcula o novo salário com base no tempo de serviço
    $novoSalario = $salarioAtual + ($tempoServico * $aumentoPorAno);

    return $novoSalario;
}

// Salário atual e tempo de serviço do funcionário (altere conforme necessário)
$salarioAtual = 3000;
$tempoServico = 5;

// Chama a função para calcular o salário reajustado
echo "Salário reajustado: R$" . calcularAumentoSalario($salarioAtual, $tempoServico);
?>