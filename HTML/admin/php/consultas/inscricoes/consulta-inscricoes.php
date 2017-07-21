<?php 
$filtro = (empty($referencia) ? '%' : $referencia);

$detalhes_inscricoes =  $pdo->prepare ("SELECT
		inscricoes.id 						AS id,
		eventos.id 							AS evento,
		eventos.nome 						AS evento_nome,
		eventos.url 						AS url,
		inscricoes.escola 					AS escola,
		inscricoes.cnpj 					AS cnpj,
		inscricoes.mec 						AS mec,
		inscricoes.cargo 					AS cargo,
		inscricoes.nome 					AS nome,
		inscricoes.cpf 						AS cpf,
		inscricoes.rg 						AS rg,
		inscricoes.data_nascimento 			AS data_nascimento,
		inscricoes.telefone 				AS telefone,
		inscricoes.celular 					AS celular,
		inscricoes.email 					AS email,
		inscricoes.cep 						AS cep,
		inscricoes.endereco 				AS endereco,
		inscricoes.complemento 				AS complemento,
		inscricoes.bairro 					AS bairro,
		inscricoes.cidade 					AS cidade,
		inscricoes.estado 					AS estado,
		inscricoes.restricao_mobilidade 	AS restricao_mobilidade,
		inscricoes.restricao_alimentacao 	AS restricao_alimentacao,
		inscricoes.aeroporto				AS aeroporto
		
		FROM inscricoes 
		LEFT JOIN eventos ON eventos.url = inscricoes.evento 
		WHERE eventos.id LIKE '{$filtro}'
		ORDER BY nome");
	
	
	

	$detalhes_inscricoes			->execute();
	$detalhes_inscritos				= $detalhes_inscricoes->fetchAll(PDO::FETCH_OBJ);
	
?>