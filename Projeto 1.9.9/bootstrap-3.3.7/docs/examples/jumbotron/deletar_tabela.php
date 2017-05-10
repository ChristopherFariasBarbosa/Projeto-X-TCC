<?php
	include("database.php");
	$id =$_GET['id_item'];
	$modelo = $_POST['modelo'];
	$descricao = $_POST['descricao'];
	$deposito = $_POST['deposito'];
	$acao = "Deletou";
	$usuario = $_POST['nome'];

	$deletarDados =$pdo->query("DELETE FROM itens WHERE id_item=".$id);

	header("location:tabela.php");
?>