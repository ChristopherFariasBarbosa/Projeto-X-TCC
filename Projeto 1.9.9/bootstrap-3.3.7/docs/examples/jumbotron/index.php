<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    
    <title>Início - Gercitens</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <style type="text/css">
      .icone {
  margin-top: 13px;
      }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
   <a class="navbar-brand" href="#">Início - <?php echo "Bem vindo(a) ".$dado['nome'];?>  </a>
          <img src="user.png" class="icone">
  </div>
  <div id="navbar" class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right">
    <li><a href="#">Início</a></li>
    <li><a href="buscar.php">Usuários</a></li>
    <li><a href="historico.php">Histórico</a></li>
    <li><a href="perfil.php">Perfil</a></li>
    <li><a href="ajuda.php">Ajuda</a></li>
    <li><a href="sair.php">Sair</a></li>
   </ul>
  </div>
 </div>
</nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Quer ver os itens que estão disponiveis nas tabelas</h1>
        <p>Aqui você verá todos os itens cadastrados</p>
        <p><a class="btn btn-primary btn-lg" href="tabela.php" role="button">Ler mais &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Itens disponiveis na alquimia</h2>
          <p>Veja nessa tabela onde a filtros por Categoria, Modelo e Descrição, também procure por palvras-chave na barra de pesquisa</p>
          <p><a class="btn btn-default" href="tabela.php" role="button">Ir Para Tabela &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Itens disponiveis no depósito A</h2>
          <p>Veja nessa tabela onde a filtros por Categoria, Modelo e Descrição, também procure por palvras-chave na barra de pesquisa</p>
          <p><a class="btn btn-default" href="tabela_a.php" role="button">Ir Para Tabela &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Itens disponiveis no depósito B</h2>
          <p>Veja nessa tabela onde a filtros por Categoria, Modelo e Descrição, também procure por palvras-chave na barra de pesquisa</p>
          <p><a class="btn btn-default" href="tabela_b.php" role="button">Ir Para Tabela &raquo;</a></p>
        </div>
        </div>
      </div>

      <hr>

      <footer>
      <p>Data : <?php
          echo date('d/m/y') . '<br />';
          ?>
      </p>
        <p>&copy; 2017 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->

<!-- Scripts do Bootstrap usados aqui -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
