<?php 

	$lista_evento = $pdo->prepare ("SELECT 
				nome 				AS nome,
				url					AS url,
				data_inicio 		AS data_inicio,
				data_termino 		AS data_termino,
				local 				AS local
				FROM eventos 		WHERE apaga = '0'
				ORDER BY id DESC LIMIT 5");

	$data_insercao				= date('Y-m-d');

	$lista_evento 				->execute();
	$lista_eventos 				= $lista_evento->fetchAll(PDO::FETCH_OBJ);

	$nome						= '';	
	$data_inicio				= '';			
	$hora_inicio				= '';			
	$data_termino				= '';			
	$local						= '';	
	$cep						= '';	
	$endereco					= '';		
	$bairro						= '';	
	$cidade						= '';	
	$estado						= '';
	$complemento				= '';
	$tipo						= 'erro';
	$ensino 					= '';
	$status						= '';
	$url						= '';
	$usuario 					= $_SESSION['passaporte']->id;


	if (isset($_POST['salvar'])  && !empty($_POST['salvar']) && $_POST['salvar'] == 'Incluir Evento')  {
		$nome						= (!empty($_POST['nome']) 			? addslashes($_POST['nome']) 			: '');
		
		$url						= (!empty($_POST['url']) 			? addslashes($_POST['url']) 			: '');
		

		$local						= (!empty($_POST['local']) 			? addslashes($_POST['local']) 			: '');
		$cep						= (!empty($_POST['cep']) 			? addslashes($_POST['cep']) 			: '');
		$endereco					= (!empty($_POST['endereco']) 		? addslashes($_POST['endereco']) 		: '');
		$bairro						= (!empty($_POST['bairro']) 		? addslashes($_POST['bairro']) 			: '');
		$cidade						= (!empty($_POST['cidade']) 		? addslashes($_POST['cidade']) 			: '');
		$estado						= (!empty($_POST['estado']) 		? addslashes($_POST['estado']) 			: '');
		$complemento				= (!empty($_POST['complemento']) 	? addslashes($_POST['complemento']) 	: '');

		$ensino						= (!empty($_POST['ensino']) 		? addslashes($_POST['ensino']) 			: '');
		$status						= (!empty($_POST['status']) 		? addslashes($_POST['status']) 			: '');

		$data_inicio				= (!empty($_POST['data_inicio']) 	? $_POST['data_inicio'] 				: '');
		$data_termino				= (!empty($_POST['data_termino']) 	? $_POST['data_termino'] 				: '');

		if (empty($nome)) {
			$mensagem 			= 'Insira um nome para esse evento';
		}elseif (empty($url)){
			$mensagem 			= 'Insira uma url por onde as pessoas devem acessar os dados do evento';
		}elseif (empty($ensino) || $ensino == 'Selecione'){
			$mensagem 			= 'Selecione o sistema de ensino';
		}elseif (empty($status) || $status == 'Selecione'){
			$mensagem 			= 'Defina um status para o evento';
		}elseif (empty($data_inicio) || empty($data_termino)){
			$mensagem 			= 'Insira as datas de inicio e término do evento';
		}elseif(empty($local) ) {
			$mensagem 			= 'De um nome para o local do evento';
		}elseif(empty($cep) || empty($endereco) || empty($bairro) || empty($cidade) || empty($estado)){
			$mensagem			= 'Insira um endereço para o evento, ou use o campo de cep para fazer uma busca';
		}else{

			$data_inicio 			= date('Y-m-d', strtotime($data_inicio));
			$data_termino 			= date('Y-m-d', strtotime($data_termino));
			$novo_evento = $pdo->prepare ("INSERT INTO eventos 
											(id, nome, url, data_inicio, data_termino, local, endereco, bairro, complemento, cidade, estado, cep, data_insercao, status, ensino, usuario)
											VALUES ( '', '{$nome}', '{$url}', '{$data_inicio}', '{$data_termino}', '{$local}', '{$endereco}', '{$bairro}', '{$complemento}', '{$cidade}', '{$estado}', '{$cep}', '{$data_insercao}', '{$status}', '{$ensino}', '{$usuario}' ) ");

			$novo_evento->execute();

			if ($novo_evento) {
				$tipo = 'sucesso';
				$mensagem = 'Evento adicionado com sucesso <a href="http://www.somosevento.com.br/" '.$url.' target="_blank">clique aqui</a> para ve-lo publicado';

				$nome = $data_inicio = $hora_inicio = $data_termino = $local = $cep = $endereco = $bairro = $cidade = $estado = $complemento = $ensino = $status = $url	= '';

			}else{
				$mensagem = 'Ocorreu um erro, tente em instantes';
			}	
		}
		alerta($tipo, $mensagem);
	}
?>
