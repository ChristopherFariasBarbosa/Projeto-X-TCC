<?php
	session_start();
	$consulta = $pdo -> query("SELECT nome FROM usuarios WHERE email = '$email'");
      $dado = $consulta -> fetch(PDO::FETCH_ASSOC);
	include("database.php");
	$id = $_POST['id_item'];
	$modelo = $_POST['modelo'];
	$descricao = $_POST['descricao'];
	$deposito = $_POST['deposito'];
	$acao = "Alterou";
	$nome = $dado['nome'];
	$data = date('d/m/y');

	$adicionarDados = $pdo->query("INSERT INTO historico(id_historico, id_item, modelo, descricao, categoria, deposito, acao, data, nome) VALUES (null, '$id','$modelo','$descricao','$categoria','$deposito','$acao','$data','$nome')");

	$editarDados = $pdo -> query("UPDATE itens SET modelo='".$modelo."', descricao='".$descricao."', deposito='".$deposito."' WHERE id_item = '".$id."' ");


	header('Location:tabela.php');
?>