<?php
//Este arquivo será responsavel por inserir novas informações no DB
	include('database.php');
	$nome = $_POST['nome'];	
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$cargo = $_POST['cargo'];
	$rg = $_POST['rg'];	
	$setor = $_POST['setor'];
	$senha = $_POST['senha'];
//Após a criação das variaveis irá inserir em tal ordem os dados das variaveis
	$inserirDados = $pdo->query("INSERT INTO usuarios(id_user, nome, email, senha, cargo, setor, cpf, rg) VALUES (null,'$nome','$email','$senha','$cargo','$setor','$cpf','$rg')");
//Este header está responsavel para leva-lo devolta a página de cadastro 
	header('location:cadastro.html');

?>