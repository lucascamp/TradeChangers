<?php
	$sql = "SELECT * FROM tbl_lead";
	if ($query = mysqli_query($conexao, $sql)){
		while ($row = mysqli_fetch_assoc($query)) {
			enviarEmail($row['email']);
		}
		mysqli_free_result($query);
	}
	mysqli_close($conexao);
?>