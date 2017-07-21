<?php 
	include '../../../php/link-banco.php';
	$id 					= $_GET['id'];
	$conn 					= conectar();

	$consulta_contatos 		= $conn->prepare("SELECT id, nome FROM contato WHERE empresa = '{$id}' AND status = 'Ativo' ORDER BY nome ");
	$consulta_contatos		->execute();
	$consulta_contatos		= $consulta_contatos->fetchAll(PDO::FETCH_OBJ);

	foreach ($consulta_contatos as $contato) {
		echo '<option value='.$contato->id.','.$contato->nome.'>'. ucwords(strtolower($contato->nome)).'</option>';
	}

?>