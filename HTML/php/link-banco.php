<?php
	function conectar(){
		try{
			$pdo			= new PDO('mysql:host=portdata.mysql.dbaas.com.br; dbname=portdata', 'portdata', 'J@5quwrc3y');
		}catch(PDOException $erro_conn){
			echo $erro_conn->getMessage();
		}
		return $pdo; 
	}
	header('Content-Type: text/html; charset=ISO-8859-1');
	$ano        = date('Y');
	$hoje		= date('Y-m-d');
?>