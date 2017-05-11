<?php

	include("database.php");
	$id = $_POST['id_item'];
	$modelo = $_POST['modelo'];
	$descricao = $_POST['descricao'];
	$deposito = $_POST['deposito'];
	$acao = "Alterou";
	$data = date('d/m/y');

	$adicionarDados = $pdo->query("INSERT INTO historico(id_historico, id_item, modelo, descricao, categoria, deposito, acao, data) VALUES (null, '$id','$modelo','$descricao','$categoria','$deposito','$acao','$data')");

	$editarDados = $pdo -> query("UPDATE itens SET modelo='".$modelo."', descricao='".$descricao."', deposito='".$deposito."' WHERE id_item = '".$id."' ");


	header('Location:tabela.php');
?>