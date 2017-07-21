<?php 
	
	function gerarSelect($tabela, $coluna = 'nome',  $condicao = '', $retorno = ''){
		$conn = conectar();	
		
		if (!empty($condicao)) {
			$condicao = 'WHERE ' . $condicao ;
		}

		$consultaSelect      = $conn->prepare(" SELECT id, $coluna FROM $tabela $condicao ORDER BY $coluna  ");
		$consultaSelect->execute();

		while($optionSelect = $consultaSelect->fetch(PDO::FETCH_OBJ)){
			echo '<option value="'.$optionSelect->id.','.$optionSelect->$coluna.' ">'.$optionSelect->$coluna.'</option>';
		}
		if (explode(',', $retorno) >= 2) {
			echo (!empty($retorno) ? '<option selected hidden value="'.$retorno.'">'. substr(strrchr($retorno, ","), 1).'</option>' : '<option value="" selected hidden> selecione </option>');
		}else{
			echo (!empty($retorno) ? '<option selected hidden value="'.$retorno.'">'. $retorno .'</option>' : '<option value="" selected hidden> selecione </option>');
		}
	}
 ?>