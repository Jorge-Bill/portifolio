<?
	include 					'../../../php/link-banco.php';
	$ligacao 					= conectar();
	$id 						= $_GET['id'];

	$apaga_registro 			= $ligacao->prepare("UPDATE programacao SET apaga = '1' WHERE id = '{$id}' ");
	$teste_apagar 				= $apaga_registro->execute();

	if ($teste_apagar) {
		echo "Registro Apagado";
	}else{
		echo "Occorreu um erro, tente em instantes";
	}
?>