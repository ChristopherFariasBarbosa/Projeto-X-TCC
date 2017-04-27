<?php
	include("database.php");
	$id = $_POST['id_item'];
	$modelo = $_POST['modelo'];
	$descricao = $_POST['descricao'];
	$editarDados = $pdo -> query("UPDATE itens SET modelo='".$modelo."', descricao='".$descricao."' ");
	header('Location:tabela.php');
?>