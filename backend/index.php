<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
	<?php
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: *");
		
		include 'conexao.php';
		
		$id =  rand(1, 999);
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$comentario = $_POST["comentario"];
		
		$query = "INSERT INTO mensagens(id, nome, email, comentario) VALUES ('$id', '$nome', '$email', '$comentario')";
		
		
		if ($link->query($query) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $link->error;
		}
	?>
  </body>
</html>
