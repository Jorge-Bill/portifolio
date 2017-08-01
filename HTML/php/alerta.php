<?php
	
	function alerta($tipo = 'comum', $mensagem=''){
		$mensagemalerta = $mensagem;
		switch ($tipo) {
			case 'erro':
				$tipoalerta		= 'alert-danger';
				$tituloalerta	= 'ERRO! ';
				break;
			case 'comum':
				$tipoalerta		= 'alert-primary';
				$tituloalerta	= 'ALERTA: ';
				break;
			case 'atencao':
				$tipoalerta		= 'alert-warning';
				$tituloalerta	= 'ATENÇÃO: ';
				break;
			case 'sucesso':
				$tipoalerta		= 'alert-success';
				$tituloalerta	= '';
				break;
			case 'informacao':
				$tipoalerta		= 'alert-Info';
				$tituloalerta	= '';
				break;
			default:
				$tipoalerta		= 'alert-primary';
				$tituloalerta	= '';
				break;
		}

		$alerta 				 = '<div class="alert '.$tipoalerta.' alert-dismissable">';
		$alerta 				.= '<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>';
		$alerta 				.= 		'<strong>'.$tituloalerta.'</strong> '.$mensagemalerta;
		$alerta 				.= '</div>';


		if (!empty($mensagemalerta)) {
			$_SESSION['alertageral'] = $alerta;
			//echo  $_SESSION['alertageral'];
		}else{
			echo  (isset($_SESSION['alertageral']) ? $_SESSION['alertageral'] : '');
			$_SESSION['alertageral'] = '';
		}
		
	} 


	function alertaEstatico($tipo = 'comum', $mensagem=''){
		$mensagemalerta = $mensagem;
		switch ($tipo) {
			case 'erro':
				$tipoalerta		= 'alert-danger';
				$tituloalerta	= 'ERRO! ';
				break;
			case 'comum':
				$tipoalerta		= 'alert-primary';
				$tituloalerta	= 'ALERTA: ';
				break;
			case 'atencao':
				$tipoalerta		= 'alert-warning';
				$tituloalerta	= 'ATENÇÃO: ';
				break;
			case 'sucesso':
				$tipoalerta		= 'alert-success';
				$tituloalerta	= '';
				break;
			case 'informacao':
				$tipoalerta		= 'alert-Info';
				$tituloalerta	= '';
				break;
			default:
				$tipoalerta		= 'alert-primary';
				$tituloalerta	= '';
				break;
		}


		$alerta 				 = '<div class="alert '.$tipoalerta.' alert-dismissable">';
		$alerta 				.= '<button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>';
		$alerta 				.= 		'<strong>'.$tituloalerta.'</strong> '.$mensagemalerta;
		$alerta 				.= '</div>';

		if (!empty($mensagemalerta)) {
			echo $alerta;
		}
	} 

?>
