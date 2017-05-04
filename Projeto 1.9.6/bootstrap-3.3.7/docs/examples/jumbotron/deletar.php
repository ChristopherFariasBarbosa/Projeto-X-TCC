<?php
	include("database.php");
	$id =$_GET['id_user'];
	$deletarDados =$pdo->query("DELETE FROM usuarios WHERE id_user=".$id);
	header("location:buscar.php");
?>