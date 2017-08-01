<?php 
	$pdo = conectar(); 
	$detalhes_sobre = $pdo->prepare("SELECT
		id,
		sobre,
		aniversario,
		estado_civil,
		nacionalidade,
		linkedin,
		facebook,
		instagram,
		github,
		email
		FROM sobre");
	$detalhes_sobre 		-> execute();
	$detalhes_sobre			= $detalhes_sobre->fetchAll(PDO::FETCH_OBJ);
 ?>