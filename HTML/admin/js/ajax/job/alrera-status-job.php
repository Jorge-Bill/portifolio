<?php 
	include_once '../../../php/link-banco.php';
	include '../../../classes/alerta.php';

	$numero			= $_GET['numero'];
	$status			= $_GET['status'];

	$conn			= conectar();

	$alteraStatus 	= $conn->prepare("UPDATE job SET status = '{$status}' WHERE numero = '{$numero}' ");
	$verificaConsulta = $alteraStatus->execute();


	if ($verificaConsulta) {
		echo '<i class="fa fa-check"> </i> &nbsp; Status alterado';
	}else{
		echo '<i class="fa fa-exclamation-triangle"> </i> &nbsp; Erro';
	}
?>