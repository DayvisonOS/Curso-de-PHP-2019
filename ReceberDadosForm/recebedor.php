<?php
if (isset($_POST['email']) && !empty($_POST['email'])) {
	if (isset($_POST['senha']) && !empty($_POST['senha'])) {

		$email = $_POST['email'];
		echo "O email enviado é: ".$email."</br>";
		$email = $_POST['senha'];
		echo "A senha enviada é: ".$email."</br>";

	}
}


?>