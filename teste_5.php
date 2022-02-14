<?php

if (isset($_POST['converter'])) {
	$teste=$_POST['texto'];

	$contei=strlen($teste);


	
	for ($i=0; $i < $contei  ; $i++) { 
		$letras=substr($teste,$i,1);
		$letra=$letras.$letra;
	}
	echo"TEXTO INVERTIDO ". $letra;
	echo "<br>";
	echo"TEXTO NORMAL ". $_POST['texto'];
}
	


	

  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>teste</title>
  	<style type="text/css">
  		input.escrita{
  			width: 500px;
  		}
  	</style>
  </head>
  <body>

  	<form action="teste_5.php" method="POST">
  	<input class="escrita" type="teste" maxlength="50" name="texto" placeholder="CONVERTA UMA MENSAGEM">
  	<input type="submit" name="converter" value="Enviar">
  	</form>
  
  </body>
  </html>

 