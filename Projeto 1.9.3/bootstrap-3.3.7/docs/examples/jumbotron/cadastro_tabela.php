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
   <a class="navbar-brand" href="#">Projeto X - <?php echo "Bem vindo(a) ".$dado['nome'];?> - Cadastrar tabelas </a><img src="edit-document.png" class="icone">
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
  <div class="form-group col-md-4">
     <label for="categoria">Categoria</label>
     <select class="form-control" required name="categoria">
      <option value="Cabo">Cabo</option>
      <option value="Caixa de Som">Caixa de Som</option>
      <option value="Celular">Celular</option>
      <option value="Diversos Eletrônicos">Divérsos Eletrônicos</option>
      <option value="Diversos Plásticos">Divérsos Plásticos</option>
      <option value="Drive CD">Drive CD</option>       
      <option value="Drive DVD">Drive DVD</option>
      <option value="Estabilizador">Estabilizador</option>
      <option value="Fio">Fio</option>
      <option value="Fonte">Fonte</option>
      <option value="Gabinete Completo">Gabinete Completo</option>
      <option value="Gabinete Incompleto">Gabinete Incompleto</option>
      <option value="Gabinete Vazio">Gabinete Vazio</option>
      <option value="HD">HD</option>
      <option value="Impressora">Impressora</option>
      <option value="Monitor CRT">Monitor CRT</option>
      <option value="Monitor LCD">Monitor LCD</option>
      <option value="Mouse">Mouse</option>
      <option value="Nobreak">Nobreak</option>
      <option value="Notebook">Notebook</option>
      <option value="Placas Coloridas">Placas coloridas</option>
      <option value="Servidor">Servidor</option>
      <option value="Switch">Switch</option>
      <option value="Teclado">Teclado</option>
      <option value="TV">TV</option>
     </select>
     <!-- <input type="select" class="form-control" required maxlength="90" name="categoria" placeholder="Digite o nome do item">
      -->
   </div>
   <div class="form-group col-md-4">
     <label for="modelo">Modelo</label>
     <input type="text" class="form-control" required maxlength="100" name="modelo" placeholder="Digite o modelo do item">
   </div>
      <div class="form-group col-md-4">
     <label for="descricao">Descrição</label>
     <input type="text" class="form-control" required name="descricao" maxlength="300" placeholder="Digite a descricao">
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