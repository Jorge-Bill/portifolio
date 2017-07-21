<?php
	function favorito($tipo, $referencia)
	{
		$conn = conectar();	
		
		$consulta_favorito 	= $conn->prepare("SELECT id FROM favorito WHERE referencia = '{$referencia}' AND tipo = '{$tipo}' ");
		$consulta_favorito	->execute();
		$teste_favorito 	= $consulta_favorito->rowCount();

		
		if ($teste_favorito >= 1 ) {
			$favorito = '<button type="button" class="btn btn-warning btn-xs pull-right m-l-xs" id="botaofavorito" onclick="favorito('.$referencia.', \''.$tipo.'\')"> <i class="fa fa-star"></i></button>';
		}else{
			$favorito = '<button type="button" class="btn btn-default btn-xs pull-right m-l-xs" id="botaofavorito" onclick="favorito('.$referencia.',\''.$tipo.'\')"> <i class="fa fa-star"></i></button>';
		}
		return $favorito;
	}
?>