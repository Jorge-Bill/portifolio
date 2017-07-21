<?php 
	// funcao para entrar no sistema e criar as variaveis de usuario 
	header('Content-Type: text/html; charset=ISO-8859-1');

	function entrar ($conexao, $id, $manterlogado){
		$pdo = $conexao;
	   	$ip = $_SERVER['REMOTE_ADDR'];

	   	$ipdetails 		= new ipdetails($ip);
	   	$ipdetails->scan();

	   	$pais			= $ipdetails->get_region();
	   	$latitude		= $ipdetails->get_latitude();
	   	$longitude		= $ipdetails->get_longitude();

	   	$pais 			= str_replace('&amp;', '&', $pais);
	   	$localizacao	= html_entity_decode($pais).$latitude.$longitude;

		$data			= date("Y-m-d H:i:s");
		$secao			= geraregistro();
		$chave			= md5($secao);

		$entradausuario = $pdo->prepare("INSERT INTO secao (numero, id_usuario, data, ip, manterlogado, localizacao) VALUES ('{$chave}', '{$id}', '{$data}', '{$ip}', '{$manterlogado}', '{$localizacao}')");
		$entradausuario->execute();
		
		$_SESSION['usuario']['id'] 		= $id;
		$_SESSION['usuario']['chave'] 	= $secao;

		if ($manterlogado == 'on') {
			setcookie('id', 		$id, 		time()+3600*24*30*12);
			setcookie('chave', 		$secao, 	time()+3600*24*30*12);
		}
		header('Location:/');
	}
	// funcao para sair do sistema, apaga os dados dos usuarios logados e o envia para a pagina de login 
	function sair($id){  
		setcookie('id', 	'', time()-3600,	"/");
		setcookie('chave', 	'',	time()-3600,	"/");
		session_destroy();
		session_unset();
		alerta('comum', 'saida');
		header('Location:/login.php');	
	}



   	

?>


