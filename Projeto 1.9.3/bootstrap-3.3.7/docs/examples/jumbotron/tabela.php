<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Projeto X - Visualizar tabela</title>
 <link rel="icon" href="logo.png">
 <!-- Link com todos os CSS relacionados a está página -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="estilo_tabela.css">
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
   <a class="navbar-brand" href="#">Projeto X - <?php echo "Bem vindo(a) ".$dado['nome'];?> - Buscar</a>
   <img src="eye.png" class="icone">
  </div>
  <div id="navbar" class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right">
    <li><a href="index.php">Início</a></li>
    <li><a href="buscar.php">Usuários</a></li>
    <li><a href="option.php">Opções</a></li>
    <li><a href="perfil.php">Perfil</a></li>
    <li><a href="ajuda.php">Ajuda</a></li>
   </ul>
  </div>
 </div>
</nav>
<hr>
<div id="main" class="container-fluid">
<br><br>
<table>
  <thead>
    <?php
    session_start();
    if((!isset($_SESSION['email'])) and (!isset($_SESSION['senha']))) {
      header("location: login.html");
    }
  include('database.php');
  $buscarDados = $pdo -> query("SELECT * FROM itens");
      echo "<tr>";
      echo "<th>Id</th>";
      echo "<th>Nome</th>";
      echo "<th>Quantidade</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";
  while ($dados = $buscarDados->fetch(PDO::FETCH_ASSOC)) {
//Aqui está os echo's responsaveis por mostrar os dados ao usuário
      echo "<tr>";
      echo "<td>".$dados['id_item']."</td>";
      echo "<td><strong>".$dados['nome']."</strong></td>";
      echo "<td>".$dados['quantidade']."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>
  <div class="col-xs-6">
<!-- Link responsável por levar ao cadastro -->
        <a href="cadastro_tabela.php" class="btn btn-primary" id="register-form-link">Adicionar item</a>
  </div>
</div>
<br>
<!-- Scripts do Bootstrap usados aqui -->
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>