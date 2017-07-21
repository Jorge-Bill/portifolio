
<?php 

	$detalhe_evento = $pdo->prepare ("SELECT 
				nome 				AS nome,
				url					AS url,
				data_inicio 		AS data_inicio,
				data_termino 		AS data_termino,
				local 				AS local
				FROM eventos 
				WHERE id = '$referencia'
				ORDER BY data_inicio ASC LIMIT 5");

	$data_insercao				= date('Y-m-d');

	$detalhe_evento 				->execute();
	$detalhe_evento 				= $detalhe_evento->fetch(PDO::FETCH_OBJ);


	$data						= ''; 
	$titulo						= ''; 
	$palestrante				= ''; 
	$detalhe					= ''; 
	$hora_inicio				= ''; 
	$hora_fim					= ''; 
	$status						= ''; 
	$tipo						= 'erro';
	$usuario 					= $_SESSION['passaporte']->id;
	


	if (isset($_POST['salvar'])  && !empty($_POST['salvar']) && $_POST['salvar'] == 'Incluir Programação')  {

		
		$data						= (!empty($_POST['data']) 			? addslashes($_POST['data']) 			: '');
		$titulo						= (!empty($_POST['titulo']) 		? addslashes($_POST['titulo']) 			: '');
		$palestrante				= (!empty($_POST['palestrante']) 	? addslashes($_POST['palestrante']) 	: '');
		$detalhe					= (!empty($_POST['detalhe']) 		? addslashes($_POST['detalhe']) 		: '');
		$hora_inicio				= (!empty($_POST['hora_inicio']) 	? addslashes($_POST['hora_inicio']) 	: '');
		$hora_fim					= (!empty($_POST['hora_fim']) 		? addslashes($_POST['hora_fim']) 		: '');
		$status						= (!empty($_POST['status']) 		? addslashes($_POST['status']) 			: '');


		if (empty($titulo)) {
			$mensagem 			= 'Insira um nome / titulo para a sua programação';
		}elseif (empty($hora_inicio) || empty($hora_fim)){
			$mensagem 			= 'Insira os horarios de inicio e término do evento';
		}else{

			$hora_inicio 			= date('H:i:s', strtotime($hora_inicio));
			$hora_fim 				= date('H:i:s', strtotime($hora_fim));

			$novo_evento = $pdo->prepare ("INSERT INTO programacao 
											(id ,evento ,data ,titulo ,palestrante ,detalhe ,hora_inicio ,hora_fim ,status ,usuario)
											VALUES ( '', '{$referencia}', '{$data}', '{$titulo}', '{$palestrante}', '{$detalhe}', '{$hora_inicio}', '{$hora_fim}', '{$status}', '{$usuario}' ) ");

			$novo_evento->execute();

			if ($novo_evento) {
				$tipo = 'sucesso';
				$mensagem = 'Programaçãoo adicionada com sucesso <a href="http://www.somosevento.com.br" target="_blank">clique aqui</a> para conferir';
			}else{
				$mensagem = 'Ocorreu um erro, tente em instantes';
			}	
		}
		alerta($tipo, $mensagem);
		header("location:/evento/adicionar-programacao/" . $referencia); 
	}
?>

