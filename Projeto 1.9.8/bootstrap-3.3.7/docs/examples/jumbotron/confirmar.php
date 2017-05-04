<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Projeto X - Confirmar</title>
 <link rel="icon" href="logo.png">
 <!-- Link com todos os CSS relacionados a está página -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="estilo_buscar.css">
 <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body> 

<hr>
<div id="main" class="container-fluid">
<br><br>

<?php
	include("database.php");
	$dados = $deletarDados->fetch(PDO::FETCH_ASSOC);
	echo "<a href='deletar.php?id_user='".$dados['id_user']."'><input type='button' value='sim' name='sim'></a>";
	echo "<a href='buscar.php'><input type='button' value='Não'></a>";
/*	if ($autenticação == 'sim') {
	$deletarDados =$pdo->query("DELETE FROM usuarios WHERE id_user=".$id);
	header("location:buscar.php");
	}*/
?>
</form>
<!-- Scripts do Bootstrap usados aqui -->
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>
