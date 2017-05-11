<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Cadastro</title>
 <link rel="icon" href="logo.png">
<!-- Link com todos os CSS relacionados a está página -->
 <link rel="stylesheet" type="text/css" href="estilo.css">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
 <script type="text/javascript">
  function sucesso(){
    alert('Alterado com sucesso');
  } 
 </script>
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
   <a class="navbar-brand" href="#">Projeto X - <?php echo "Bem vindo(a) ".$dado['nome'];?> - Alterar tabelas </a><img src="edit-document.png" class="icone">
  </div>
  <div id="navbar" class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right">
    <li><a href="index.php">Início</a></li>
    <li><a href="buscar.php">Usuários</a></li>
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
 <form action="editar_tabela.php" method="POST">
<?php
  $id = $_GET['id_item'];
  include("database.php");
  $mostrarDados = $pdo->query("SELECT * FROM itens WHERE id_item = $id");
  $dados = $mostrarDados->fetch(PDO::FETCH_ASSOC); 
   //Area de campos do form
   echo "<div class='row'>";
    echo "<div class='form-group col-md-4'>";
     echo "<label for='modelo'>Modelo</label>";
     echo "<input type='text' class='form-control' maxlength='100' name='modelo' value='".$dados['modelo']."'>";
      echo "</div>";
      echo "<div class='form-group col-md-4'>";
     echo "<label for='descricao'>Descrição</label>";
     echo "<input type='text' class='form-control' maxlength='300' name='descricao' value='".$dados['descricao']."'>";
   echo "</div>";
   echo "<div class='form-group col-md-4'>";
     echo "<label for='deposito'>Depósito</label>";
     echo "<select class='form-control' required name='deposito'>
      <option value=''>Selecione um Depósito Específico</option>
      <option value='Geral'>Depósito Geral</option>
      <option value='A'>Depósito A</option>
      <option value='B'>Depósito B</option>
     </select>";
   echo "</div>";
   echo "</div>";
   echo "<input type='hidden' name='id_item' value='".$dados['id_item']."'><br>";
    echo "<input type='submit' class='btn btn-primary' value='Alterar'> ";
    echo " <a href='tabela.php' class='btn btn-default'>Cancelar</a>";
   ?>
  </div>
 </div>
<!-- Scripts do Bootstrap usados aqui -->
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>