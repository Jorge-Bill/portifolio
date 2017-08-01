<?php
	$pdo = conectar();
	$detalhes_colaboradores = $pdo -> prepare("SELECT
		colaboradores.id 				AS id,
		colaboradores.nome 				AS nome,
		colaboradores.funcao 			AS funcao,
		colaboradores.descricao 		AS descricao,
		colaboradores.facebook 			AS facebook,
		colaboradores.twitter 			AS twitter,
		colaboradores.site 				AS site
		
		FROM colaboradores
		");
	$detalhes_colaboradores 			-> execute();
	$detalhes_colaboradores 			=  $detalhes_colaboradores->fetchAll(PDO::FETCH_OBJ);
?>