<?php


$db = "mysql:dbname=blog;host=localhost";
// define o tipo : depois nome ; local
$dbuser = "root";
//usuario do banco
$dbpass = "";
//password do banco;

try {
	$pdo = new PDO($db ,$dbuser ,$dbpass);
	//define variavel , cria um novo PDO e passa os parametros.

	echo "Conexao bem Sucedida";
	echo"dfdfdfdf";
	//caso esteja ok , vai passar e conseguir se conectar.
	
} catch (PDOException $e) {
	//faz o PDOException e define uma variavel para o catch
	echo "Falhou Conexao: ".$e->getMessage;
	//Manda msg e retorna a exceção que esta na variavel com a função
	//->getMessage;
}







?>