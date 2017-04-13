<?php 

// Definindo parametros de conexao 
include("database.php"); 
$dados1=$_POST['email'];
$dados2 =$_POST['senha'];
// Preparando statement 
$buscarDados = $pdo->query("SELECT * FROM usuarios WHERE $dados1 AND $dados2");//Chamando dados do banco através de PDO pra query selecionando da tabela usuarios, $dados1 e $dados2 

$dados = $buscarDados->fetch(PDO::FETCH_ASSOC);//Chamando do banco de dados.
$dados('senha');//Criando um array para guardar a senha
 //if ($dados1 == $dados) {
 	//$dados1 
 //}

header('location:index.php?$dados1');

?> 


