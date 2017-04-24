<?php
//Este arquivo será responsavel por inserir novas informações no DB
	include('database.php');
	$nome = $_POST['nome'];	
	$quantidade = $_POST['quantidade'];
//Após a criação das variaveis irá inserir em tal ordem os dados das variaveis
	$inserirDados = $pdo->query("INSERT INTO itens(id_item, nome, quantidade) VALUES (null,'$nome','$quantidade')");
//Este header está responsavel para leva-lo devolta a página de cadastro 
	header('location:cadastro_tabela.php');

?>