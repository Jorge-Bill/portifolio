<?php 
    include_once 'php/link-banco.php';
    include 'classes/alerta.php';
    include 'php/entrar.php';

    $ano        = date('Y');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>PORTIFOLIO | ADM</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/icheck/custom.css" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="loginColumns animated flipInX">
        <div class="row">
            <div class="col-md-6" style="color: #666">
                <h2 class="font-bold">Bem vindo </h2>
                <p>Use o formulário ao lado para fazer login e ver as informações do seu site</p>
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Nome/E-mail" required autocomplete="false">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required autocomplete="false">
                        </div>
                        <input type="submit" value="entrar" name="entrar" class="btn btn-primary block full-width m-b">
                        
                    </form>
                    <p class="m-t" style="color: #666">
                        <label> <input type="checkbox" class="i-checks"> &nbsp; Ficar conectado</label>
                        <?php alerta(); ?>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6 text-right" style="color: #666">
               <small>2017-<?=$ano?></small>
            </div>
        </div>
    </div>
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>

    <script src="/js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>

</html>
