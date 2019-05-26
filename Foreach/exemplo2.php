<form>
Nome :<br>
<input type ="text" name="nome"><br><br>
Mes :<br>
<input type ="date" name="nascimento"><br><br>
<br>
<input type ="submit" value="Enviar">
</form>

<?php
if (isset($_GET)){
foreach ($_GET as $key => $value) {
   echo "Nome do campo:".$key."<br>";
   echo "Valor do campo:".$value."<br>"; 

   echo"<hr>";
}}
?>