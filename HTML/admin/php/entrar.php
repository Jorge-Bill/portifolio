<?php 
	session_start();
	$pdo 			= conectar();
	$loginalerta	= '';
	require 'classes/geradorderegistro.php';
	require 'classes/class.ipdetails.php';
	require_once 'portaprincipal.php'; // arquivo responsavel por controlar entrada e saída dos usuarios do sistema

	$usuario 		= (isset($_POST['usuario']) 	 && !empty($_POST['usuario']) 		? trim(addslashes($_POST['usuario'])) 	: '');
	$senha			= (isset($_POST['senha']) 		 && !empty($_POST['senha']) 		? trim(addslashes($_POST['senha'])) 	: '');
	$manterlogado	= (isset($_POST['manterlogado']) && !empty($_POST['manterlogado']) 	? $_POST['manterlogado'] 				: '');

	if(isset($_POST['entrar']) && $_POST['entrar'] == 'entrar') {
		$verificausuario	= $pdo->prepare("SELECT nome, senha, id, chave FROM usuario WHERE nome = '{$usuario}' OR email = '{$usuario}' LIMIT 1 ");
		if(empty($usuario)) {
			$mensagem			= 'Informe um nome de usuario';
			$tipo = 'atencao';
		}elseif (empty($senha)) {
			$mensagem			= 'Informe uma senha';
			$tipo = 'atencao';
		}else{
			
			$verificausuario->execute();
			$qtdusuario= $verificausuario->rowCount();
			$linhausuario=$verificausuario->fetch(PDO::FETCH_OBJ);

			if ($qtdusuario <= 0) {
				$mensagem = 'usuario invalido';
				$tipo = 'erro';
			}elseif ($linhausuario->senha <> md5($senha)) {
				$mensagem = 'senha invalida';
				$tipo = 'erro';
			}else{
				entrar($pdo, $linhausuario->id, $manterlogado);
			}
		}
		
		alerta($tipo, $mensagem); // funcão do arquivo alerta que gera uma mensagem de erro nos formularios
		
	}
?>

