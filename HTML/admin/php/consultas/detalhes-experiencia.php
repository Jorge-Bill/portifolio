<?php 
	$pdo = conectar();
	$detalhes_exp = $pdo -> prepare("SELECT
		experiencia.id 					AS id,
		experiencia.data_entrada 		AS data_entrada,
		experiencia.data_saida 			AS data_saida,
		experiencia.localizacao 		AS localizacao,
		experiencia.funcao 				AS funcao,
		experiencia.descricao 			AS descricao
		
		FROM experiencia
		");
	$detalhes_exp 						-> execute();
	$detalhes_exp						= $detalhes_exp->fetchAll(PDO::FETCH_OBJ);
 ?>