<?php 
	include '../../../php/link-banco.php';
	
	session_start();

	$conn 					= conectar();
	$ref					= $_GET['ref'];
	$tipo					= $_GET['tipo'];

	$usuario	= $_SESSION['passaporte']->id;

	$consulta_favorito 	= $conn->prepare("SELECT id FROM favorito WHERE referencia = '{$ref}' AND tipo = '{$tipo}' AND usuario ='{$usuario}' ");
	$consulta_favorito	->execute();
	$teste_favorito 	= $consulta_favorito->rowCount();

	if ($teste_favorito <= 0 )  {
		$acao_favorito 			= $conn->prepare("INSERT INTO favorito (referencia, tipo, usuario) VALUES ( '{$ref}', '{$tipo}', '{$usuario}' )");
		$acao_favorito			->execute();
	}else{
		$acao_favorito 			= $conn->prepare("DELETE FROM favorito WHERE referencia = '{$ref}' AND tipo = '{$tipo}' AND usuario ='{$usuario}' ");
		$acao_favorito			->execute();
	}


?>