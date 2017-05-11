<?php
	include("database.php");
	$id =$_GET['id_item'];
	$modelo = $_POST['modelo'];
	$descricao = $_POST['descricao'];
	$deposito = $_POST['deposito'];
	$acao = "Deletou";
	$data = date('d/m/y');

	$adicionarDados = $pdo->query("INSERT INTO historico(id_historico, id_item, modelo, descricao, categoria, deposito, acao, data) VALUES (null, '$id','$modelo','$descricao','$categoria','$deposito','$acao','$data')");

	$deletarDados =$pdo->query("DELETE FROM itens WHERE id_item=".$id);

	header("location:tabela.php");
?>