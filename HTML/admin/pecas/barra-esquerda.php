<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <?php
                $menuNivel          = $_SESSION['passaporte']->nivel;
                $pdo                = conectar();
                $consulta_menu      = $pdo->prepare("SELECT * FROM menu_principal ORDER BY indice");
                $consulta_submenu   = $pdo->prepare("SELECT * FROM sub_menu WHERE menu_pai = :menupai AND nivel <= '{$menuNivel}' ORDER BY indice");
                $consulta_menu->execute();

                include_once 'perfil-lateral.php'; 
                $itens_menu = $consulta_menu->fetchAll(PDO::FETCH_OBJ);
                foreach ($itens_menu as $item ) {

                    $consulta_submenu->bindValue(":menupai", $item->id);
                    $consulta_submenu->execute();
                    $itens_submenu = $consulta_submenu->fetchAll(PDO::FETCH_OBJ);
                    $verificaSubMenu = $consulta_submenu->rowCount();

                    $setaSubMenu = (($verificaSubMenu >= 1) ? '</span> <span class="fa arrow"></span>' : '');
                    echo '<li>';
                    echo '<a href="'.$item->link.'"><i class="'.$item->icone.'"></i> <span class="nav-label">'.$item->campo. $setaSubMenu.'</a>';
                    if ($verificaSubMenu >= 1) {
                        echo '<ul class="nav nav-second-level collapse">';
                        foreach ($itens_submenu as $subitem ) {
                            echo '<li><a href="'.$subitem->link.'">'.$subitem->campo.'</a></li>';
                        }
                        echo '</ul>';
                    }
                    echo '</li>';
            }?>            
        </ul>
    </div>
</nav>


