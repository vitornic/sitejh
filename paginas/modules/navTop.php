<div class="page">
    <nav class="menu">
        <ul class="menu__list">
            <?php
                if (isset($_COOKIE["Nome"]) and (isset($_COOKIE["Email"]))) {
                    $login_cookie = $_COOKIE['Nome'];

                    echo '<li class="menu__group"><a href="inicio.php" class="menu__link">inicio</a></li>';
                    echo '<li class="menu__group"><a href="produtos.php" class="menu__link">produtos</a></li>';
                    echo '<li class="menu__group"><a href="administrativo.php" class="menu__link">administrativo</a></li>';
                    echo '<li class="menu__group"><a href="#" class="menu__link">'.$login_cookie.'</a></li>';
                    echo '<li class="menu__group"><a href="logout.php" class="menu__link">Sair</a></li>';
                } else if (isset($_COOKIE['NomeADM']) and (isset($_COOKIE['EmailADM']))) {
                    $login_cookie = $_COOKIE['NomeADM'];

                    echo '<li class="menu__group"><a href="inicio.php" class="menu__link">inicio</a></li>';
                    echo '<li class="menu__group"><a href="produtos.php" class="menu__link">produtos</a></li>';
                    echo '<li class="menu__group"><a href="categorias.php" class="menu__link">categorias</a></li>';
                    echo '<li class="menu__group"><a href="#" class="menu__link">'.$login_cookie.'</a></li>';
                    echo '<li class="menu__group"><a href="logout.php" class="menu__link">Sair</a></li>';
                } else {
                    echo '<li class="menu__group"><a href="inicio.php" class="menu__link">inicio</a></li>';
                    echo '<li class="menu__group"><a href="produtos.php" class="menu__link">produtos</a></li>';
                    echo '<li class="menu__group"><a href="administrativo.php" class="menu__link">administrativo</a></li>';
                    echo '<li class="menu__group"><a href="cliente.php" class="menu__link">cliente</a></li>';
                }
            ?>
        </ul>
    </nav>
</div>