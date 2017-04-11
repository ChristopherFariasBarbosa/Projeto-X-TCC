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
 <link rel="stylesheet" type="text/css" href="estilo_buscar.css">
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
   <a class="navbar-brand" href="#">Projeto X - Buscar</a>
   <img src="eye.png" class="icone">
  </div>
  <div id="navbar" class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right">
    <li><a href="index.php">Início</a></li>
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
    echo "<tr>"
      echo "<th>Nome</th>";
      echo "<th>Quantidade</th>";
      echo "<th>Descrição</th>";
    echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
    echo "<tr>";
      echo "<td><strong>Impressora</strong></td>";
      echo "<td>15</td>";
      echo "<td>The speed of the show/reveal</td>";
   echo " </tr>";
    echo "<tr>";
      echo "<td><strong>Teclado</strong></td>";
      echo "<td>linear</td>";
      echo "<td>The easing of the show/reveal</td>";
   echo " </tr>";
   echo " <tr>";
      echo "<td><strong>Mouse</strong></td>";
      echo "<td>50</td>";
      echo "<td>The speed of the hide/conceal</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<td><strong>Monitor LCD</strong></td>";
      echo "<td>linear</td>";
      echo "<td>The easing of the hide/conceal</td>";
    echo "</tr>";         
    echo "<tr>";
    echo "  <td><strong>Monitor CRT</strong></td>";
      echo "<td>auto</td>";
      echo "<td>The width that the data will be truncated to - <em>('auto' or px amount)</em></td>";
    echo "</tr>";
    echo "<tr>";
      echo "<td><strong>ellipsis</strong></td>";
      echo "<td>true</td>";
      echo "<td>Set to true to enable the ellipsis</td>";
    echo "</tr>";
   echo " <tr>";
    echo "  <td><strong>title</strong></td>";
      echo "<td>false</td>";
     echo " <td>Set to true to show the full data on hover</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<td><strong>afterShow</strong></td>";
      echo "<td> $.noop</td>";
      echo "<td>The callback fired after the show/reveal</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<td><strong>afterHide</strong></td>";
      echo "<td>$.noop</td>";
      echo "<td>The callback fired after the hide/conceal</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<td><strong>Sou foda</strong></td>";
      echo "<td>$.noop</td>";
      echo "<td>The callback fired after the hide/conceal</td>";
    echo "</tr>";
    ?>
  </tbody>
</table>
  <div class="col-xs-6">
<!-- Link responsável por levar ao cadastro -->
        <a href="cadastro_tabela.html" class="btn btn-primary" id="register-form-link">Adicionar item</a>
  </div>
</div>
<br>
<!-- Scripts do Bootstrap usados aqui -->
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>