<?php
	try {
	$pdo = new PDO("mysql:host=localhost;dbname=cadastrocemy","root","toor");
	} catch (PDOException $erro) {
		echo "Erro ao conectar";	
	}

?>	