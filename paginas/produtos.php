<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Produtos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/estilos.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'modules/navTop.php'; ?>
    </header>

    <main>
        <section>
            <?php
            if (isset($_COOKIE['Email'])) {
                $login_cookie    = $_COOKIE['Email'];
                $nome_cookie     = $_COOKIE['Nome'];
                include 'modules/prod_form_cli.php';
            } else if (isset($_COOKIE['EmailADM'])) {
                $login_cookie    = $_COOKIE['EmailADM'];
                $nome_cookie     = $_COOKIE['NomeADM'];
                include 'modules/prod_form_adm.php';
            } else if (isset($_COOKIE['Email']) and isset($_COOKIE['EmailADM'])) {
                $login_cookie    = $_COOKIE['EmailADM'];
                $nome_cookie     = $_COOKIE['NomeADM'];
                include 'modules/prod_form_adm.php';
            } else {
                include 'modules/prod_form_cli.php';
            }
            ?>
        </section>
    </main>
</body>

</html>