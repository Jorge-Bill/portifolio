<?php
	$pdo = conectar();
	$detalhes_portifolio = $pdo -> prepare("SELECT
		portifolio.id 				AS id,
		portifolio.nome 			AS nome,
		portifolio.categoria 		AS categoria,
		portifolio.imagem_thumb 	AS imagem_thumb,
		portifolio.imagem_full 		AS imagem_full
		
		FROM portifolio
		");
	$detalhes_portifolio 			-> execute();
	$detalhes_portifolio 			=  $detalhes_portifolio->fetchAll(PDO::FETCH_OBJ);
?>