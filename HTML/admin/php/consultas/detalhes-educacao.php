<?php 
	$pdo = conectar();
	$detalhes_educacao = $pdo -> prepare("SELECT
		educacao.id 				AS id,
		educacao.instituicao 		AS instituicao,
		educacao.curso 				AS curso,
		educacao.data_entrada 		AS data_entrada,
		educacao.data_saida 		AS data_saida
		FROM educacao
		");
	$detalhes_educacao 				-> execute();
	$detalhes_educacao 				= $detalhes_educacao->fetchAll(PDO::FETCH_OBJ);	
 ?>