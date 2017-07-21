<?php 
	
	$detalhes_evento = $pdo->prepare("SELECT
		nome 			AS	nome,
		url				AS  url,
		data_inicio 	AS	data_inicio,
		data_termino 	AS	data_termino,
		detalhes 		AS	detalhes,
		id				AS  id,
		local 			AS	local,
		endereco 		AS	endereco,
		bairro 			AS	bairro,
		complemento 	AS	complemento,
		cidade 			AS	cidade,
		estado 			AS	estado,
		cep 			AS	cep,
		status			AS	status,
		ensino			AS	ensino
		FROM 	eventos WHERE id = ? 
						ORDER BY nome");

	$detalhes_evento 			->execute(array($referencia));
	$detalhes_evento 			=$detalhes_evento->fetch(PDO::FETCH_OBJ);
	
	$programacao_data = $pdo->prepare("SELECT DISTINCT
		programacao.data 			AS	data_evento,
		programacao.evento 			AS id_evento
		FROM	programacao 
		LEFT JOIN eventos AS eventos ON programacao.evento = eventos.id
        WHERE eventos.id = ?
        ORDER BY data_evento");							
		
	$programacao_data		->execute(array($referencia));
	$programacao_data		=$programacao_data->fetchAll(PDO::FETCH_OBJ);
 ?> 