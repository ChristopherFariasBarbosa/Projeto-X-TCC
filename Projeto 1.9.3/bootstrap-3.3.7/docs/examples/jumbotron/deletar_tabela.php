<?php
	include("database.php");
	$id =$_GET['id_item'];
	$deletarDados =$pdo->query("DELETE FROM itens WHERE id_item=".$id);
	header("location:tabela.php");
?>