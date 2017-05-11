<?php
	include("database.php");
	$id =$_GET['id_item'];
	$modelo = $_POST['modelo'];
	$descricao = $_POST['descricao'];
	$deposito = $_POST['deposito'];
	$acao = "Deletou";
	$usuario = $_POST['nome'];

	$adicionarDados = $pdo->query("INSERT INTO historico(id_historico, id_item, modelo, descricao, categoria, deposito, acao) VALUES (null, '$id','$modelo','$descricao','$categoria','$deposito','$acao')");


	header("location:deletar_tabela.php");
?>