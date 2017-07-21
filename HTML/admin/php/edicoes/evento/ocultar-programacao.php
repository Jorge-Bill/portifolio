<?
	include 					'../../../php/link-banco.php';
	$ligacao 					= conectar();
	$id 						= $_GET['id'];
	$acao 						= $_GET['ac'];

	$status 					= ($acao == '1' ? 'visivel' : 'oculto');

	$oculta_registro 			= $ligacao->prepare("UPDATE programacao SET status = '{$status}' WHERE id = '{$id}' ");
	$teste_ocultar 				= $oculta_registro->execute();

	if ($teste_ocultar) {
		echo "Salvo";
	}else{
		echo "Occorreu um erro, tente em instantes";
	}
?>