<form method="POST" action="editar_go.php">
<?php
	$id = $_GET['id_user'];
	include("database.php");
	$mostrarDados = $pdo->query("SELECT * FROM usuarios WHERE id_user=$id");
	$dados = $mostrarDados->fetch(PDO::FETCH_ASSOC);
	echo "Nome:<input type='text' name='nome' value='".$dados['nome']."'><br>";
	echo "E-mail:<input type='email' name='email' value='".$dados['email']."'><br>";
	echo "Senha:<input type='password' name='senha' value='".$dados['senha']."'><br>";

	echo "<input type='hidden' name='id_user' value='".$dados['id_user']."'><br>";
	echo "<input type='submit' value='Alterar'><br>";

?>
</form>