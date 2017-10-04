<?php
$conexao = mysqli_connect("mysql04-farm76.kinghost.net", "tradechangers", "saidafrentegama1", "tradechangers");
$sql = "SELECT * FROM tbl_lead";
$lista = [];
if ($query = mysqli_query($conexao, $sql)){
	while ($row = mysqli_fetch_assoc($query)) {
		array_push($lista, [$row['email'], $row['nome_completo'], $row['ipv4'], $row['tipo'], $row['datetime_cadastro']]);
    }
    mysqli_free_result($query);
	$csv = fopen('arquivo.csv', 'w');
	foreach ($lista as $linha) {
		fputcsv($csv, $linha)."<br>";
		var_dump($linha);
	}
	fclose($csv);
}
mysqli_close($conexao);
?>