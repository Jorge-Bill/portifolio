<?php 
	
$detalhes_evento =  $pdo->prepare ("SELECT  
				id 				AS id,
				nome 			AS nome,
				url				AS url,
				data_inicio 	AS data_inicio,
				data_termino	AS data_termino,
				detalhes 		AS detalhes,
				local 			AS local,
				endereco 		AS endereco,
				bairro 			AS bairro,
				complemento 	AS complemento,
				cidade 			AS cidade,
				estado 			AS estado,
				cep 			AS cep,
				status 			AS status
				FROM eventos WHERE  apaga = 0
				ORDER BY nome");

	$detalhes_evento				->execute();
	$detalhes_eventos				= $detalhes_evento->fetchAll(PDO::FETCH_OBJ);
	

$lista_evento = $pdo->prepare ("SELECT 
				nome 				AS nome,
				data_inicio 		AS data_inicio,
				data_termino 		AS data_termino,
				local 				AS local,
				endereco 			AS endereco,
				bairro 				AS bairro,
				cidade 				AS cidade,
				estado 				AS estado
				FROM eventos WHERE status = 'ativo' AND apaga = 1
				ORDER BY nome");

	$lista_evento 				->execute();
	$lista_eventos 				= $lista_evento->fetchAll(PDO::FETCH_OBJ);

?>