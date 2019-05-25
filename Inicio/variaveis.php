<?php  

$nome = "Hcode";

var_dump($nome);
$nome1 = "Joao";
$sobrenome= "Rangel";

$nomefinal = $nome1." ".$sobrenome;// o ponto concatena as variaveis
echo "<br/>";
echo $nomefinal;
exit;//o PHP executa até esse momento com esse comando
echo "<br/>";
echo $nome1;
unset($nome1);//limpa a memoria da variavel

if (isset($nome1)) {// verifica se existe de fato a variavel e se esta sendo usada
	echo $nome1;// se sim ela faz o comando
}


?>