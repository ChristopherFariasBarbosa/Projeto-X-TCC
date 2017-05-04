<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    	<title>Data Tables</title>
  	</head>
  	<body>
	    <h1>Produtos</h1>

	    <table class="table table-bordered table-hover" id="id_item">
	    	<thead>
	    	<tr>
      			<th>Id</th>
      			<th>Nome</th>
      			<th>Quantidade</th>
       		</tr>
			</thead>
			<tr>
	<?php
		include('database.php');
		$buscarDados = $pdo -> query("SELECT * FROM itens");
		while ($dados = $buscarDados->fetch(PDO::FETCH_ASSOC)) {
		//Aqui está os echo's responsaveis por mostrar os dados ao usuário
		      echo "<td>".$dados['id_item']."</td>";
		      echo "<td><strong>".$dados['categoria']."</strong></td>";
		      echo "<td>".$dados['modelo']."</td>";
		      echo "<td>".$dados['descricao']."</td>";
    }
    ?>
	    		</tr>
	    	</tbody>
	    </table>

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