<?php
//spaceship
$a =50;
$b =35;
echo "A=".$a."</br>B=".$b;
echo "</br>";
echo "SPACESHIP  =   <=>    </br>";
echo "SpaceShip : Se o A for maior que B retorna = 1</br>";
echo "SpaceShip : Se o A for menor que B retorna = -1</br>";
echo "SpaceShip : Se o A for igual a B retorna = 0</br>";
var_dump($a <=> $b);



echo"</br>";
echo"</br> NO TESTE PARA SABER SE UMA VARIAVEL ESTA NULO USA-SE O ??";
echo"</br> echo variavel_a ?? variavel_b ?? variavel_c; ";
echo"</br> O ?? serve como IF se for null traga o proximo.";

$varA =NULL;
$varB =NULL;
$varC =40;
echo "</br>";

echo $varA ?? $varB ?? $varC;



?>