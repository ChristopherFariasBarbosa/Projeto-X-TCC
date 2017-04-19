<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Projeto X - Editar</title>
 <link rel="icon" href="logo.png">
<!-- Link com todos os CSS relacionados a está página -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="estilo.css">
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
   <a class="navbar-brand" href="#">Projeto X - <?php echo "Bem vindo(a) ".$dado['nome'];?> - Alterar </a><img src="edit-document.png" class="icone">
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
 <form action="editar_go.php" method="POST">
<?php
  $id = $_GET['id_user'];
  include("database.php");
  $mostrarDados = $pdo->query("SELECT * FROM usuarios WHERE id_user = $id");
  $dados = $mostrarDados->fetch(PDO::FETCH_ASSOC);
//Aqui se encontra o formulário que será alterado da ID recebida
  echo "<div class='row'>";
   echo "<div class='form-group col-md-8'>";
     echo "<label for='nome'>Nome Completo</label>";
     echo "<input type='text' class='form-control' maxlength='90' name='nome' value='".$dados['nome']."'>";
   echo "</div>";
   echo "<div class='form-group col-md-4'>";
     echo "<label for='cargo'>Cargo</label>";
     echo "<input type='text' class='form-control' maxlength='50' name='cargo' value='".$dados['cargo']."'>";
   echo "</div>";
  echo "</div>";
  echo "<div class='row'>";
   echo "<div class='form-group col-md-4'>";
     echo "<label for='email'>E-mail</label>";
     echo "<input type='email' class='form-control' maxlength='200' name='email' value='".$dados['email']."'>";
   echo "</div>";
   echo "<div class='form-group col-md-4'>";
     echo "<label for='senha'>Senha</label>";
    echo "<input type='password' class='form-control' maxlength='100' name='senha' value='".$dados['senha']."'>";
   echo "</div>";
      echo "<div class='form-group col-md-4'>";
     echo "<label for='setor'>Setor</label>";
     echo "<input type='text' class='form-control' maxlength='50' name='setor' value='".$dados['setor']."'>";
   echo "</div>";
  echo "</div>";
  echo "<div class='row'>";
   echo "<div class='form-group col-md-6'>";
     echo "<label for='rg'>RG</label>";
     echo "<input type='text' class='form-control' name='rg' maxlength='8' value='".$dados['rg']."'>";
   echo "</div>";
      echo "<div class='form-group col-md-6'>";
     echo "<label for='cpf'>CPF</label>";
     echo "<input type='text' class='form-control' maxlength='15' name='cpf' value='".$dados['cpf']."'>";
   echo "</div>";
  echo "</div>";
 echo "</div>";
  echo "<input type='hidden' name='id_user' value='".$dados['id_user']."'><br>";
  echo "<hr>";
  echo "<div id='actions' class='row'>";
    echo "<div class='col-md-9'>";
    echo "</div>";
    echo "<div class='col-md-3'>";
    echo "<input type='submit' class='btn btn-primary' value='Alterar'> ";
    echo " <a href='buscar.php' class='btn btn-default'>Cancelar</a>";
    echo "</div>";
    echo "</div>";
 ?>
</form>
<!-- Scripts do Bootstrap usados aqui -->
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>