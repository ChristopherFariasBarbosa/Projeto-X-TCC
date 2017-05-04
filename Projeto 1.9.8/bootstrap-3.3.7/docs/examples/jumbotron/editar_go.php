<?php
	include("database.php");
	$id = $_POST['id_user'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$cargo = $_POST['cargo'];
	$setor = $_POST['setor'];
	$rg = $_POST['rg'];
	$editarDados = $pdo -> query("UPDATE usuarios SET nome='".$nome."', email='".$email."', senha='".$senha."', cargo='".$cargo."' ,setor='".$setor."', rg='".$rg."'  WHERE id_user ='".$id."' ");
	header('Location:buscar.php');
?>