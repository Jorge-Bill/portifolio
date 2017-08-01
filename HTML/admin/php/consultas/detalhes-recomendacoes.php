<?php
	$pdo = conectar();
	$detalhes_recomendacoes = $pdo -> prepare("SELECT
		recomendacoes.id 				AS id,
		recomendacoes.nome 				AS nome,
		recomendacoes.cargo 			AS cargo,
		recomendacoes.descricao 		AS descricao
		
		FROM recomendacoes
		");
	$detalhes_recomendacoes 			-> execute();
	$detalhes_recomendacoes 			=  $detalhes_recomendacoes->fetchAll(PDO::FETCH_OBJ);
?>