<?php
	$pdo = conectar();

	$detalhes_colaboradores = $pdo -> prepare("SELECT
		colaboradores.id 				AS id,
		colaboradores.nome 				AS nome,
		colaboradores.funcao 			AS funcao,
		colaboradores.descricao 		AS descricao,
		colaboradores.facebook 			AS facebook,
		colaboradores.twitter 			AS twitter,
		colaboradores.site 				AS site,
		colaboradores.imagem 			AS imagem
		
		FROM colaboradores

		");

	$detalhes_educacao = $pdo -> prepare("SELECT
		educacao.id 					AS id,
		educacao.instituicao 			AS instituicao,
		educacao.curso 					AS curso,
		educacao.data_entrada 			AS data_entrada,
		educacao.data_saida 			AS data_saida

		FROM educacao
		");

	$detalhes_exp = $pdo -> prepare("SELECT
		experiencia.id 					AS id,
		experiencia.data_entrada 		AS data_entrada,
		experiencia.data_saida 			AS data_saida,
		experiencia.localizacao 		AS localizacao,
		experiencia.funcao 				AS funcao,
		experiencia.descricao 			AS descricao
		
		FROM experiencia
		");

	$detalhes_habilidadesUm = $pdo	 -> prepare("SELECT DISTINCT
		habilidades.id 					AS id,
		habilidades.descricao 			AS descricao,
		habilidades.nivel 				AS nivel

		FROM habilidades
		WHERE id <= 4
		ORDER BY nivel 
		");

	$detalhes_habilidadesDois = $pdo	 -> prepare("SELECT DISTINCT
		habilidades.id 					AS id,
		habilidades.descricao 			AS descricao,
		habilidades.nivel 				AS nivel

		FROM habilidades
		WHERE id > 4
		ORDER BY nivel 
		");

	$detalhes_portifolio = $pdo -> prepare("SELECT
		portifolio.id 					AS id,
		portifolio.nome 				AS nome,
		portifolio.categoria 			AS categoria,
		portifolio.imagem_thumb 		AS imagem_thumb,
		portifolio.imagem_full 			AS imagem_full
		
		FROM portifolio

		");

	$detalhes_recomendacoes = $pdo -> prepare("SELECT
		recomendacoes.id 				AS id,
		recomendacoes.nome 				AS nome,
		recomendacoes.cargo 			AS cargo,
		recomendacoes.descricao 		AS descricao
		
		FROM recomendacoes
		");

	$detalhes_sobre = $pdo->prepare("SELECT
		pessoa.id 						AS id,
		pessoa.sobre 					AS sobre,
		pessoa.aniversario 				AS aniversario,
		pessoa.estado_civil 			AS estado_civil,
		pessoa.nacionalidade 			AS nacionalidade,
		pessoa.linkedin	 				AS linkedin,
		pessoa.facebook	 				AS facebook,
		pessoa.instagram 				AS instagram,
		pessoa.github	 				AS github,
		pessoa.email	 				AS email,
		pessoa.nome 					AS nome

		FROM pessoa");

	$detalhes_perfil = $pdo -> prepare("SELECT
		perfil.id 					AS id,
		perfil.nome 				AS nome,
		perfil.foto 				AS foto,
		perfil.cargo 				AS cargo,
		perfil.email 				AS email,
		perfil.linkedin 			AS linkedin,
		perfil.facebook 			AS facebook,
		perfil.github 				AS github,
		perfil.instagram 			AS instagram,
		perfil.ocupacaoAtual 		AS ocupacaoAtual,
		perfil.ocupacaoAnterior 	AS ocupacaoAnterior,
		perfil.educacao 			AS educacao
		
		FROM perfil");


	$detalhes_colaboradores 			-> execute();
	$detalhes_colaboradores 			= $detalhes_colaboradores->fetchAll(PDO::FETCH_OBJ);

	$detalhes_educacao 					-> execute();
	$detalhes_educacao 					= $detalhes_educacao->fetchAll(PDO::FETCH_OBJ);	

	$detalhes_exp 						-> execute();
	$detalhes_exp						= $detalhes_exp->fetchAll(PDO::FETCH_OBJ);

	$detalhes_habilidadesUm 			-> execute();
	$detalhes_habilidadesUm				= $detalhes_habilidadesUm->fetchAll(PDO::FETCH_OBJ);

	$detalhes_habilidadesDois 			-> execute();
	$detalhes_habilidadesDois			= $detalhes_habilidadesDois->fetchAll(PDO::FETCH_OBJ);

	$detalhes_portifolio 				-> execute();
	$detalhes_portifolio 				=  $detalhes_portifolio->fetchAll(PDO::FETCH_OBJ);

	$detalhes_recomendacoes 			-> execute();
	$detalhes_recomendacoes 			=  $detalhes_recomendacoes->fetchAll(PDO::FETCH_OBJ);

	$detalhes_sobre 					-> execute();
	$detalhes_sobre						=  $detalhes_sobre->fetchAll(PDO::FETCH_OBJ);

	$detalhes_perfil 					-> execute();
	$perfil = $detalhes_perfil 			=  $detalhes_perfil->fetch(PDO::FETCH_ASSOC);

?>