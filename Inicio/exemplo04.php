<?php
$nome =$_GET["a"];

//variaveis predefinidas sao arrays superglobais

//var_dump($nome);
$ip =$_SERVER["REMOTE_ADDR"];//pega o ip local
$ip2 =$_SERVER["SCRIPT_NAME"];//pega o nome do arquivo

echo $ip; 
echo "</br>";
echo $ip2;


?>