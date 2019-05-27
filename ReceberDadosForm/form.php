
<?php 

//testa se a variavel global $_POST esta sendo usada ou nao 

if (isset($_POST['email']) && !empty($_POST['email'])) {
	//isset retorna true ou false
if (isset($_POST['senha'])&&  !empty($_POST['senha'])) {
	$email= $_POST['email'];
	echo "Meu Email é:".$email;
	$senha= $_POST['senha'];
	echo "Minha Senha é:".$senha;
}
	
}


 ?>
<hr>
<form method="POST">
Email :</br>
<input type ="text" name="email"/></br></br>
Senha:</br>
<input type ="password" name="senha"/></br></br>
<input type ="submit" value="Enviar"/></br></br>

</form>
