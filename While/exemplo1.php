<?php

$condicao = true;

while ($condicao) {
     $num = rand(1,20);

     if ($num ===2) {
        $condicao = false;

     }else{
         echo $num."</br>";
     }
    
}
?>