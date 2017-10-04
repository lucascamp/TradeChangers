<?php
$conexao = mysqli_connect("mysql04-farm76.kinghost.net", "tradechangers", "123asd123", "tradechangers");
$sql = "SELECT * FROM tbl_lead";
if ($query = mysqli_query($conexao, $sql)){
	while ($row = mysqli_fetch_assoc($query)) {
		echo "{$row['email']},{$row['nome_completo']},{$row['ipv4']},{$row['tipo']},{$row['datetime_cadastro']}<br>";
    }
    mysqli_free_result($query);
}
mysqli_close($conexao);
?>