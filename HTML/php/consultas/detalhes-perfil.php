<?php
	$pdo = conectar();
	$detalhes_perfil = $pdo -> prepare("SELECT
		perfil.id 					AS id,
		perfil.nome 				AS nome,
		prfil.foto 					AS foto,
		perfil.cargo 				AS cargo,
		perfil.descricao 			AS descricao,
		perfil.email 				AS email,
		perfil.linkedin 			AS linkedin,
		perfil.facebook 			AS facebook,
		perfil.github 				AS github,
		perfil.instagram 			AS instagram
		
		FROM perfil

		");
	$detalhes_perfil 			-> execute();
	$detalhes_perfil 			=  $detalhes_perfil->fetchAll(PDO::FETCH_ASSOC);

?> 