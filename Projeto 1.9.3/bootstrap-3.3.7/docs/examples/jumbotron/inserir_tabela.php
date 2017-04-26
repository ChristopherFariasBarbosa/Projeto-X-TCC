<?php
//Este arquivo será responsavel por inserir novas informações no DB
	include('database.php');
	$modelo = $_POST['modelo'];	
	$descricao = $_POST['descricao'];
	$categoria = $_POST['categoria'];
//Após a criação das variaveis irá inserir em tal ordem os dados das variaveis
	$inserirDados = $pdo->query("INSERT INTO itens(id_item, modelo, descricao, categoria) VALUES (null,'$modelo','$descricao','$categoria')");
//Este header está responsavel para leva-lo devolta a página de cadastro 
	header('location:cadastro_tabela.php');

?>