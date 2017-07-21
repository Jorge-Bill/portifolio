<?php 
    include_once 'php/link-banco.php';
    include_once 'classes/alerta.php';
    require_once 'php/autenticacao.php';
    include 'php/controle-paginas.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?php echo $titulo?></title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet"> 

    <link rel="stylesheet" href="/css/plugins/sweetalert/sweetalert.css">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>

    <link rel="stylesheet" href="/css/plugins/clockpicker/clockpicker.css">
</head>
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
<body >

    <div id="wrapper ">
        <?php include_once 'pecas/barra-esquerda.php'; ?>
        <div id="page-wrapper" class="gray-bg">
            <?php include_once 'pecas/barra-superior.php' ?>
            <div class="tooltip-demo m-b-lg" id="paginas">
                <?php include_once $paginaAtual; ?>
                <div class="clearfix m-b-lg"></div>
            </div>
            
            <div class="footer fixed">
                <div>
                    <strong>Copyright</strong> - Raphael Perriollat  &copy; 2017-<?=$ano_atual?>
                </div>
            </div>
        </div>
        </div>

    <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/js/plugins/slimscroll/slimscroll.js"></script>
    <script src="/js/inspinia.js"></script>
    <script src="/js/plugins/pace/pace.min.js"></script>
    
    <script>
        function favorito(ref, tipo){
        var url = '/js/ajax/index/favorito.php?ref='+ref+'&tipo='+tipo;
        $.get(url, function(dataReturn) {
            if ( $('#botaofavorito').hasClass('btn-warning') ) {
                $('#botaofavorito').removeClass('btn-warning');
            }else{
                $('#botaofavorito').addClass('btn-warning');
            }
        });
      }

    </script>


</body>

</html>
