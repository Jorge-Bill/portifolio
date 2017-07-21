<?php 
    $url                = isset($_GET['url']) ? $_GET['url'] : '' ; 
    $validas      		= array('index');
    $niveis            	= explode('/', $url);

    if (!empty($niveis[0])) {
    	$pasta 			 = (!empty($niveis[0]) ? $niveis[0] : '');
    	$pagina			 = (!empty($niveis[1]) ? $niveis[1] : '');
    	$referencia		 = (!empty($niveis[2]) ? $niveis[2] : '');
    	$subreferencia	 = (!empty($niveis[3]) ? $niveis[3] : '');
    	$ultrareferencia = (!empty($niveis[4]) ? $niveis[4] : '');
        $paginaAtual         = $pasta.'/'.$pagina.'.php';

        $titulo         = strtoupper($pasta . ' | ' . $pagina); 
    }else{
        $paginaAtual    = 'dashboard.php'; 
        $titulo         = 'PORTIFOLIO | ADM';
        }
?>