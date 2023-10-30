<?php
// Função de Formatar Preço
function formatar_preco($preco) {
    return "R$ " . number_format($preco, 2, ',', '.');
}

echo "O preço é: <strong>" . formatar_preco(4.35) . "</strong>";
echo "<br>";
echo "O preço é: <strong>" . formatar_preco(100.35) . "</strong>";