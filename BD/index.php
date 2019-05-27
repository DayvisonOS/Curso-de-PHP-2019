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
		$sql = "SELECT * FROM usuarios where email='dayvison.acdc@gmail.com'";// aqui é string
		$sql = $pdo->query($sql);	//aqui vira parte do PDO
		//usa mesma variavel para economia de memoria
		if ($sql->rowCount()>0) {
			echo "Há users yep</br>";

			foreach ($sql ->fetchAll() as $usuario) {
			//percorre o sql e pega todos e vai atribuindo a variave usuario
				echo "Nome: ".$usuario["nome"]." - "."Email: ".$usuario["email"]."</br>";
			}
		}else{
echo "Nao ha users cadastrados";

		}
	//echo "Conexao bem Sucedida";
	//caso esteja ok , vai passar e conseguir se conectar.
} catch (PDOException $e) {
	//faz o PDOException e define uma variavel para o catch
	echo "Falhou Conexao: ".$e->getMessage;
	//Manda msg e retorna a exceção que esta na variavel com a função
	//->getMessage;
}







?>