<?php 
	function gerarBarra($total, $diferenca, $descricao = '', $tipo='Progresso')
	{
		$porcentagem 			= (($diferenca*100)/$total);

		$barra 					 = '<dl class="dl-horizontal">';
		$barra					.= '<dt>'.$tipo.' :</dt>';
		$barra 					.= '<dd>';
		$barra 					.= '<div class="progress progress-bar-default  m-b-sm">';
		$barra 					.= '<div style="width: '.$porcentagem. '%;" class="progress-bar progress-bar-primary"></div>';
		$barra 					.= '</div>';
		$barra 					.= '<small>';
		$barra 					.= '<strong>'.floor($porcentagem).' %</strong>';
		$barra					.= $descricao . ' restam <strong>'.($total - $diferenca).'</strong>.';
		$barra					.= '</small>';
        $barra					.= '</dd>';
        $barra					.= '</dl>';

        return $barra;
	}                    
?>