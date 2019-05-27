<?php
$nome = "Dayvison";
$nome2 = md5($nome); //criptografia irreversivel
$nome3 = base64_encode($nome);//reversivel

echo "Nome original: ". $nome."</br>";
echo "Nome criptografado: ".$nome2."</br>";
echo "Nome criptografado encode: ".$nome3."</br>";

?>