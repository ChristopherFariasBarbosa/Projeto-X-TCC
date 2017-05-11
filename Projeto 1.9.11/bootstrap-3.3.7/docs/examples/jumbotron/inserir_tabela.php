<?php
//Este arquivo será responsavel por inserir novas informações no DB
	include('database.php');
	$modelo = $_POST['modelo'];	
	$descricao = $_POST['descricao'];
	$categoria = $_POST['categoria'];
	$deposito = $_POST['deposito'];
	$acao = "Adicionou";
	$data = date('d/m/y');
//Após a criação das variaveis irá inserir em tal ordem os dados das variaveis
	$adicionarDados = $pdo->query("INSERT INTO historico(id_historico, id_item, modelo, descricao, categoria, deposito, acao, data) VALUES (null, '$id','$modelo','$descricao','$categoria','$deposito','$acao','$data')");

	$inserirDados = $pdo->query("INSERT INTO itens(id_item, modelo, descricao, categoria, deposito) VALUES (null,'$modelo','$descricao','$categoria','$deposito')");
//Este header está responsavel para leva-lo devolta a página de cadastro 
	header('location:cadastro_tabela.php');

?>