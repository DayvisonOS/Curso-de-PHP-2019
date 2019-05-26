<?php

$qualIdade=66;
$idadeCrianca=12;
$idadeMaior=18;
$idadeMelhor=65;

if($qualIdade < $idadeCrianca ){
echo"<strong>Criancinha!!!</strong>";

}else if($qualIdade < $idadeMaior){
    echo"<strong>Adolescente!!!</strong>";
    
}
else if($qualIdade < $idadeMelhor){

    echo"<strong>Adulto!!!</strong>";
}
else {
    echo"<strong>Idoso!!!</strong>";


}
echo "</br>";

echo ($qualIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";
// If simples onde a "?"= então e o ":" senão.

?>