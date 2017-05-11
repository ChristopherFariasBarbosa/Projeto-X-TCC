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
   <a class="navbar-brand" href="#">Projeto X - <?php echo "Bem vindo(a) ".$dado['nome'];?></a>
   <img src="eye.png" class="icone">
  </div>
  <div id="navbar" class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right">
    <li><a href="index.php">Início</a></li>
    <li><a href="buscar.php">Usuários</a></li>
    <li><a href="#">Histórico</a></li>
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
<table id="id_item">
  <thead>
    <?php
    $buscarDados = $pdo -> query("SELECT * FROM historico");
      echo "<tr>";
      echo "<th>Número do item</th>";
      echo "<th>Modelo</th>";
      echo "<th>Descrição</th>";
      echo "<th>Depósito</th>";
      echo "<th>Ação</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";
  while ($dados = $buscarDados->fetch(PDO::FETCH_ASSOC)) {
//Aqui está os echo's responsaveis por mostrar os dados ao usuário
      echo "<tr>";
      echo "<td><strong>".$dados['id_item']."</strong></td>";
      echo "<td>".$dados['modelo']."</td>";
      echo "<td>".$dados['descricao']."</td>";
      echo "<td>".$dados['deposito']."</td>";
      echo "<td>".$dados['acao']."</td>";
    }
    ?>
  </tbody>
</table>
  <div class="col-xs-6">
        <a href="index.php" class="btn btn-default">Voltar</a>
  </div>
</div>
<br>
<!-- Scripts do Bootstrap usados aqui -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
      <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css">
      <script>
      $(document).ready(function(){
        $('#id_item').DataTable({
          "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)"
            }
        });
    });
      </script>
</body>
</html>