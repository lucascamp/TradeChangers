<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Acompanhamento de Lead</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-1">	
		</div>	
		<div class="col-md-10">
			<br/>
			<h3 align="center">Visualizar Leads</h3>	
			<hr>
			<form action="leadview.php" method="post">
				<div class="form-group">
					<select name="tipo" class="form-control">
						<option value="0">ESCOLHA O TIPO DO LEAD</option>
						<option value="B2B">B2B</option>
						<option value="B2C">B2C</option>
					</select>
				</div>
				<div class="form-group">
					<select name="produto" class="form-control">
						<option value="0">ESCOLHA DE ONDE VEIO O LEAD</option>
						<option value="Newsletter">NEWSLETTER</option>
						<option value="Ebook">E-BOOK</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-block">FILTRAR</button>
				</div>
			</form>
			<hr>
			<?php
				$conexao = mysqli_connect("mysql04-farm76.kinghost.net", "tradechangers", "saidafrentegama1", "tradechangers");
				$where = "";
				if (isset($_POST['tipo']) && isset($_POST['produto']) && ($_POST['tipo'] != '0' || $_POST['produto'] != '0')){
					$where .= " WHERE ";
					$where .= $_POST['tipo'] != '0' ? "tipo='{$_POST['tipo']}'" : "";
					$where .= $_POST['tipo'] != '0' && $_POST['produto'] != '0' ? " AND " : "";
					$where .= $_POST['produto'] != '0' ? "produto='{$_POST['produto']}'" : "";
				}
				$sql = "SELECT * FROM tbl_lead".$where;
				if ($query = mysqli_query($conexao, $sql)){
			?>
			<div class="form-group">
				<center><p>Quantidade de valores retornados: <?php echo mysqli_num_rows($query); ?></p></center>
				<table class="table table-bordered table-hover">
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>Tipo</th>
						<th>De Onde</th>
						<th>Quando</th>
					</tr>
					<?php
							while ($row = mysqli_fetch_assoc($query)) {
								$nome = utf8_encode($row['nome_completo']);
								echo "<tr>";
								echo "	<td>{$nome}</td>";
								echo "	<td>{$row['email']}</td>";
								echo "	<td>{$row['tipo']}</td>";
								echo "	<td>{$row['produto']}</td>";
								echo "	<td>{$row['datetime_cadastro']}</td>";
								echo "<tr>";
							}
							mysqli_free_result($query);
						}
						mysqli_close($conexao);
					?>
				</table>
			</div>
		</div>
		<div class="col-md-1">
		</div>			
	</div>
	</div>
</body>
</html>