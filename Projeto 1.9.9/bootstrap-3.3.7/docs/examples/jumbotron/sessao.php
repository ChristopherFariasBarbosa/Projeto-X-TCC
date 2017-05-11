<?php
session_start();
  include('database.php');
  $email = $_POST['email'];
  $senha = $_POST['senha'];


  $consulta = $pdo -> prepare("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
  $consulta -> execute();

  $num = $consulta -> rowCount();

  if ($num > 0) {
  $_SESSION['email'] = $email;
  $_SESSION['senha'] = $senha;
  header("location: index.php");
    //echo "Logado! Bem Vindo(a) ".$login."<br>";
  }
  else {
    echo "ERRO";
  }
?>


