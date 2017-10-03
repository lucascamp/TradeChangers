<?php
$conexao = mysqli_connect("mysql04-farm76.kinghost.net", "tradechangers", "123asd123", "tradechangers");
$sql = "SELECT * FROM tbl_lead";
if ($query = mysqli_query($conexao, $sql)){
	while ($row = mysqli_fetch_assoc($query)) {
		$tipo = gerenciarTipo($row['email']);
		echo "{$row['email']},{$row['nome_completo']},{$row['ipv4']},$tipo,{$row['datetime_cadastro']}<br>";
    }
    mysqli_free_result($query);
}
mysqli_close($conexao);

function gerenciarTipo($email){
	$tipos = ["gmail", "yahoo", "msn", "hotmail", "outlook", "live", "bol", "ig", "oi", "pop", "zipmail"];
	preg_match("/\@(.*?)\./", $email, $dominio);
	return in_array($dominio[1], $tipos) ? "B2C" : "B2B";
}
?>