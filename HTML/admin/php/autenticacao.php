<?php 
	session_start();
	$data_atual 		= date('Y-m-d');
	$ano_atual 			= date('Y');

	if (isset($_SESSION['usuario']['chave']))  {
		$chave 			= $_SESSION['usuario']['chave'];
		$id 			= $_SESSION['usuario']['id'];
		if (empty($_SESSION['passaporte'])) {
			autenticacao($id);
		}
	}elseif (isset($_COOKIE['chave']) && !empty($_COOKIE['chave'])) {
		$chave 			= $_COOKIE['chave'];
		$id 			= $_COOKIE['id'];
		$pdo 			= conectar();

		$testarcookie 			= $pdo->prepare("SELECT numero, id_usuario FROM secao WHERE id_usuario=:id AND numero=:secao");
		$testarcookie->bindValue(":secao", md5($chave));
		$testarcookie->bindValue(":id", $id);
		$testarcookie->execute();
		$validar= $testarcookie->rowCount();

		if ($validar >= 1) {
			autenticacao($id);
		}else{
			header('location:/php/sair.php');
		}
	}else{
		header('location:/php/sair.php');
	}

	function autenticacao($id){
		$pdo 				= conectar();
		
		$autenticausuario 	= $pdo->prepare("SELECT usuario.id AS id, usuario.nome, usuario.nivel, usuario.email, usuario.cargo, usuario_dados.sexo,  usuario_dados.ramal, usuario_dados.foto FROM usuario AS usuario LEFT JOIN usuario_dados ON usuario.id = usuario_dados.id_usuario WHERE usuario.id=:id  LIMIT 1");
		$autenticausuario->bindValue(":id", $id);
		$autenticausuario->execute();
		
		$_SESSION['passaporte'] = $autenticausuario->fetch(PDO::FETCH_OBJ);
	}
?>

