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
    alert('Cadastro com sucesso');
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
   <a class="navbar-brand" href="#">Cadastro</a>
   <img src="edit-document.png" class="icone">
  </div>
  <div id="navbar" class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right">
    <li><a href="index.php">Início</a></li>
    <li><a href="buscar.php">Usuários</a></li>
    <li><a href="option.php">Opções</a></li>
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
 <form action="inserir_tabela.php" method="POST">
  <!-- Area de campos do form -->
  <div class="row">
   <div class="form-group col-md-8">
     <label for="nome">Nome Completo</label>
     <input type="text" class="form-control" required maxlength="90" name="nome" placeholder="Digite o nome do item">
   </div>
      <div class="form-group col-md-4">
     <label for="quantidade">Quantidade</label>
     <input type="number" class="form-control" required maxlength="10" name="quantidade" placeholder="Digite a quantidade">
   </div>
  </div>
 </div>
 <hr>
<!-- Botões de enviar ou cancelar -->
 <div id="actions" class="row">
    <div class="col-md-9">
    </div>
    <div class="col-md-3">
      <input type="submit" class="btn btn-primary" value="Enviar" onClick="sucesso();">
      <a href="tabela.php" class="btn btn-default">Cancelar</a>
    </div>
  </div></form>
<!-- Scripts do Bootstrap usados aqui -->
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>