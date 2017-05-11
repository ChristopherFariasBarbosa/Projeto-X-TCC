<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Projeto X - Visualizar</title>
 <link rel="icon" href="logo.png">
 <!-- Link com todos os CSS relacionados a está página -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="estilo_buscar.css">
 <link rel="stylesheet" type="text/css" href="estilo.css">
 <?php
    session_start();
    if((!isset($_SESSION['email'])) and (!isset($_SESSION['senha']))) {
      header("location: login.html");
    }
    include('database.php');
     $email = $_SESSION['email'];

     $consulta = $pdo -> query("SELECT nome FROM usuarios WHERE email = '$email'");
      $dado = $consulta -> fetch(PDO::FETCH_ASSOC);

  ?>
</head>
<body> 
 <nav class="navbar navbar-inverse navbar-fixed-top">
 <div class="container-fluid">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Barra de navegação</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="#">Projeto X - <?php echo "Bem vindo(a) ".$dado['nome']; ?> - Buscar usuários</a>
   <img src="eye.png" class="icone">
  </div>
  <div id="navbar" class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right">
    <li><a href="index.php">Início</a></li>
    <li><a href="#">Usuários</a></li>
    <li><a href="historico.php">Histórico</a></li>
    <li><a href="perfil.php">Perfil</a></li>
    <li><a href="ajuda.php">Ajuda</a></li>
    <li><a href="sair.php">Sair</a></li>
   </ul>
  </div>
 </div>
</nav>
<hr>
<div id="main" class="container-fluid">
<br><br>
 <form action="editar_go.php" method="POST">
  <?php
    include('database.php');
  $buscarDados = $pdo -> query("SELECT * FROM usuarios");
  while ($dados = $buscarDados->fetch(PDO::FETCH_ASSOC)) {
//Aqui está os echo's responsaveis por mostrar os dados ao usuário
    echo "<table border='0px'>";
    echo "<tr>";
    echo "<td class='itens'>ID: ".$dados['id_user']."</td>";
    echo "<td class='itens'>Nome: ".$dados['nome']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td class='itens'>Email: ".$dados['email']."</td>";
    echo "<td class='itens'>Senha: ".$dados['senha']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td class='itens'>Cargo: ".$dados['cargo']."</td>";
    echo "<td class='itens'>Setor: ".$dados['setor']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td class='itens'>RG: ".$dados['rg']."</td>";
    echo "</tr>";
    echo "</table>";
//Aqui está os botões responsaveis por levar os dados as páginas de deletar ou alterar informções dos usuários
    echo "<br> <a href='deletar.php?id_user=".$dados['id_user']."' class='btn btn-primary'>Deletar</a> <a href='alterar.php?id_user=".$dados['id_user']."'  class='btn btn-primary'>Alterar</a>";
  }
    echo "<br><br><center><td><a href='cadastro.html' class='btn btn-primary'>Cadastrar</a> <a href='index.php' class='btn btn-default'>Voltar</a></td></center>";
    echo "<hr>";
?>
</form>
<!-- Scripts do Bootstrap usados aqui -->
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>