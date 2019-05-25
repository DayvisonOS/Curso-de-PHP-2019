<?php  
//tipos basicos e dados
$nome= 	"Dayvison";
$site="www.dayvi.me.com";


$ano= 1990;

$salario = 5500.99;

$bloqueado= false;
//////////////////////////////////////////

//tipos compostos de dados

$frutas  = array("abacaxi","laranja","manga");

echo $frutas[2];

// OBJETO
echo "<br/>";
$anoNascimento= new DateTime(); 
//var_dump($anoNascimento);


////////////////////////////////////////////
//tipos especiais 

$arquivo = fopen("tipodado.php", "r");
var_dump($arquivo);

echo "<br/>";

$null = null;
var_dump($null);

 ?>