<?php 

	$dados_evento 			= $pdo->prepare("SELECT * FROM eventos WHERE id = '$referencia' ");
	$dados_evento 			->execute();
	$evento_unico 			= $dados_evento->fetch(PDO::FETCH_OBJ); 	

	$lista_evento = $pdo->prepare ("SELECT 
				nome 				AS nome,
				data_inicio 		AS data_inicio,
				data_termino 		AS data_termino,
				local 				AS local,
				url 				AS url
				FROM eventos 		WHERE apaga = '0'	
				ORDER BY id DESC LIMIT 5");

	$data_insercao				= date('Y-m-d');

	$lista_evento 				->execute();
	$lista_eventos 				= $lista_evento->fetchAll(PDO::FETCH_OBJ);

	$nome						= $evento_unico->nome;
	$data_inicio				= $evento_unico->data_inicio;
	$url						= $evento_unico->url;
	$data_termino				= $evento_unico->data_termino;
	$local						= $evento_unico->local;	
	$cep						= $evento_unico->cep;
	$endereco					= $evento_unico->endereco;
	$bairro						= $evento_unico->bairro;
	$cidade						= $evento_unico->cidade;
	$estado						= $evento_unico->estado;
	$complemento				= $evento_unico->complemento;
	$tipo						= 'erro';
	$ensino 					= $evento_unico->ensino;
	$status						= $evento_unico->status;
	$usuario 					= $_SESSION['passaporte']->id;


	if (isset($_POST['salvar'])  && !empty($_POST['salvar']) && $_POST['salvar'] == 'Salvar edição')  {
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
			

			$editar_evento 			= $pdo->prepare ("UPDATE eventos 
				SET 
				nome  				= '{$nome}', 
				url  				= '{$url}', 
				data_inicio  		= '{$data_inicio}', 
				data_termino  		= '{$data_termino}', 
				local  				= '{$local}', 
				endereco  			= '{$endereco}', 
				bairro  			= '{$bairro}', 
				complemento 		= '{$complemento}', 
				cidade  			= '{$cidade}', 
				estado  			= '{$estado}', 
				cep  				= '{$cep}', 
				status  			= '{$status}', 
				ensino  			= '{$ensino}', 
				usuario  			= '{$usuario}'
				WHERE id = '$referencia' ");


			$editar_final			= $editar_evento->execute();

			if ($editar_final) {
				$tipo = 'sucesso';
				$mensagem = 'Evento alterado com sucesso <a href="http://www.somosevento.com.br/" '.$url.' target="_blank">clique aqui</a> para ve-lo publicado';
				$nome = $data_inicio = $hora_inicio = $data_termino = $local = $cep = $endereco = $bairro = $cidade = $estado = $complemento = $ensino = $status = $url	= '';
			}else{
				$mensagem = 'Ocorreu um erro, tente em instantes';
			}	
		}
		alerta($tipo, $mensagem);
	}
?>
