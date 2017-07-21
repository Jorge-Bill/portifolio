<?php 
    include '../../../php/link-banco.php';
    $id                     = $_GET['id'];
    $conn                   = conectar();


    $consulta_usuarios      = $conn->prepare("SELECT 
        usuario.id AS id,
        usuario.nome AS nome, 
        usuario.email AS email, 
        usuario.cargo AS cargo,
        dados.id_setor AS id_setor,
        dados.tel_celular AS celular,
        dados.foto AS foto,
        dados.ramal AS ramal,
        setor.setor AS setor
        FROM usuario AS usuario
        LEFT JOIN usuario_dados AS dados ON dados.id_usuario = usuario.id
        LEFT JOIN setor AS setor ON setor.id = dados.id_setor
        WHERE usuario.id = '{$id}' ");

    $consulta_usuarios      ->execute();
    $usuario      = $consulta_usuarios->fetch(PDO::FETCH_OBJ);
?>

 <div class="col-lg-4 m-t-md">
    <div class="contact-box no-borders no-padding">
        <a href="#">
        <div class="col-sm-4">
            <div class="text-center">
                <img alt="image"  class="img-circle img-md m-t-xs img-responsive" src="/img/fotos-usuarios/<?=(!empty($usuario->foto) ? $usuario->foto : 'usuario.png')?>">
                <div class="m-t-xs font-bold"><?=$usuario->cargo?></div>
            </div>
        </div>
        <div class="col-sm-8">
            <h3><strong><?=$usuario->nome?></strong></h3>
            <p class="linha-unica"> <i class="fa fa-envelope-open-o"></i> <a href="mailto:<?=$usuario->email?>"><?=$usuario->email?> </a></p>
            <address>
                <strong><?=$usuario->setor?></strong><br>
                <abbr title="ramal">ramal. </abbr><?=$usuario->ramal?><br>
                <abbr title="celular">cel. </abbr><?=$usuario->celular?><br>
            </address>
        </div>
        <div class="clearfix"></div>
    </a>
    </div>
</div>

