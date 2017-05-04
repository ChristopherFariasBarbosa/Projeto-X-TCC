<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    	<title>Data Tables</title>
  	</head>
  	<body>
	    <h1>Produtos</h1>

	    <table class="table table-bordered table-hover" id="id_da_tabela">
	    	<thead>
	    		<tr>
	    			<td>Nome</td>
	    			<td>Preço</td>
	    		</tr>
	    	</thead>
	    	<tbody>
	    		<tr>
	    			<td>Farinha De Trigo Vilma</td>
	    			<td>1.88</td>
	    		</tr>
	    		<tr>
	    			<td>Óleo De Girassol Liza</td>
	    			<td>5.24</td>
	    		</tr>
	    		<tr>
	    			<td>Macarrão Espaguete Com Ovos</td>
	    			<td>2.40</td>
	    		</tr>
	    		<tr>
	    			<td>Molho De Tomate Pomarola</td>
	    			<td>1.56</td>
	    		</tr>
	    		<tr>
	    			<td>Maionese Liza Tradicional</td>
	    			<td>3.35</td>
	    		</tr>
	    		<tr>
	    			<td>Café Evolutto Extra Forte Ou Tradicional</td>
	    			<td>6.29</td>
	    		</tr>
	    		<tr>
	    			<td>Leite Condensado Mococa Lata</td>
	    			<td>2.93</td>
	    		</tr>
	    		<tr>
	    			<td>Caixa De Bombons Garoto</td>
	    			<td>8.80</td>
	    		</tr>
	    		<tr>
	    			<td>Bis Lacta Sabores</td>
	    			<td>3.98</td>
	    		</tr>
	    		<tr>
	    			<td>Margarina Qualy Cremosa</td>
	    			<td>4.19</td>
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
		    $('#id_da_tabela').DataTable({
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