<?php 
	session_start();
	include '../classes/alerta.php';
	require_once 'portaprincipal.php'; 
	sair($_SESSION['usuario']['id']);
 ?>