<?php
    $paginaAtual = $_SERVER['HTTP_REFERER']; //Pega URL que o usuário estava
    if(isset($_COOKIE["Email"]) OR (isset($_COOKIE["Nome"]))) { //verifica se o cookie "Email" existe
        setcookie("Email", null, -1, '/'); // Seta o cookie "Email" como nulo, excluindo-o
        setcookie("Nome", null, -1, '/');
        setcookie("clientes", null, -1, '/');
        session_destroy();
        exit("  <script type='text/javascript'>
                    window.location.replace('$paginaAtual');
                </script>");
    } else if(isset($_COOKIE["EmailADM"]) OR (isset($_COOKIE["NomeADM"]))) { //verifica se o cookie "Email" existe
        setcookie("EmailADM", null, -1, '/'); // Seta o cookie "Email" como nulo, excluindo-o
        setcookie("NomeADM", null, -1, '/');
        setcookie("administrativo", null, -1, '/');
        session_destroy();
        exit("  <script type='text/javascript'>
                    window.location.replace('$paginaAtual');
                </script>");
    } else {
        header("refresh: 5;inicio.php");
        exit("<center><img src='../images/icons8-erro.png'><span style='color:red'>ALGO DEU ERRADO... REDIRECIONANDO EM 5 SEGUNDOS...</span><img src='../images/icons8-erro.png'></center>");
    }
?>