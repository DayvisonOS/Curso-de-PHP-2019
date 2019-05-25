<?php
$nome ="Dayvison";

echo $nome . " Oliveira Silva --- Concatenação com  ponto";
echo "</br>";
$nome .= " mais alguma coisa(Variavel ja recebe valor e texto!)";
echo $nome;

echo "</br>";
$valorTotal = 0;

$valorTotal += 100;
echo $valorTotal."R$ +</br>";   
$valorTotal += 200;
echo $valorTotal."R$ +</br>";
 if ($valorTotal == 300) {
    $valorTotal *=0.9; // multiplica o valortotal por 0.9 o que da 10% de desconto
    echo "-10% Promo!</br>";
    echo $valorTotal." Valor com Desconto</br>";   
 }



?>