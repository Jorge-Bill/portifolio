<?php 
	$pdo = conectar();
	$detalhes_habilidadesUm = $pdo	 -> prepare("SELECT DISTINCT
		habilidades.id 			AS id,
		habilidades.descricao 	AS descricao,
		habilidades.nivel 		AS nivel
		FROM habilidades
		WHERE id <= 4
		ORDER BY nivel 
		");
	$detalhes_habilidadesUm 			-> execute();
	$detalhes_habilidadesUm			= $detalhes_habilidadesUm->fetchAll(PDO::FETCH_OBJ);
	$detalhes_habilidadesDois = $pdo	 -> prepare("SELECT DISTINCT
		habilidades.id 			AS id,
		habilidades.descricao 	AS descricao,
		habilidades.nivel 		AS nivel
		FROM habilidades
		WHERE id > 4
		ORDER BY nivel 
		");
	$detalhes_habilidadesDois 			-> execute();
	$detalhes_habilidadesDois			= $detalhes_habilidadesDois->fetchAll(PDO::FETCH_OBJ);
 ?>