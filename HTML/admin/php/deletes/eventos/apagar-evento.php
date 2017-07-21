<?
	include 					'../../../php/link-banco.php';
	$ligacao 					= conectar();
	$id 						= $_GET['id'];

	$apaga_registro 			= $ligacao->prepare("UPDATE eventos SET apaga = '1' WHERE id = '{$id}' ");
	$teste_apagar 				= $apaga_registro->execute();

	if ($teste_apagar) {
		echo "Evento apagado";
	}else{
		echo "Occorreu um erro, tente em instantes";
	}
?>