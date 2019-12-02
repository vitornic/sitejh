<?php

include_once '../data/conexaobd.inc';

if (isset($_POST['Cadastrar'])) { // Ao clicar no botão cadastrar
    $nome      = $_POST['nome_cad'];
    $email     = $_POST['email_cad'];
    $senha     = md5($_POST['senha_cad']);
    $confsenha = md5($_POST['conf_senha_cad']);
    $data_hora = date("Y-m-d H:i:s");

    include '../data/clienteData.inc';

    if ($Email == $email) {
        header("refresh: 5;../cliente.php");
        exit("<center><img src='../../images/icons8-atenção.png'><span style='color:orange'>EMAIL JA EXISTE, ESCOLHA OUTRO !!! REDIRECIONANDO EM 5 SEGUNDOS...</span><img src='../../images/icons8-atenção.png'></center>");
    } else if ($senha !== $confsenha) {
        header("refresh: 5;../cliente.php");
        exit("<center><img src='../../images/icons8-atenção.png'><span style='color:orange'>SENHAS NÃO COENCIDEM !!! REDIRECIONANDO EM 5 SEGUNDOS...</span><img src='../../images/icons8-atenção.png'></center>");
    } else if ($conexao->query($sql) == TRUE) {
        header("refresh: 5;../cliente.php#paralogin");
        exit("<center><img src='../../images/icons8-ok.png'><span style='color:green'>CADASTRADO COM SUCESSO !!! REDIRECIONANDO EM 5 SEGUNDOS...</span><img src='../../images/icons8-ok.png'></center>");
    } else {
        header("refresh: 5;../cliente.php");
        exit("<center><img src='../../images/icons8-erro.png'><span style='color:red'>OOPS... ALGO DEU ERRADO !!! REDIRECIONANDO EM 5 SEGUNDOS...</span><img src='../../images/icons8-erro.png'></center>");
    }
} else if (isset($_POST['Logar'])) { // Ao clicar no botão logar
    session_name('clientes');
    session_start();
    $_SESSION['log_email']  = $_POST['email_login'];
    $_SESSION['log_senha']  = md5($_POST['senha_login']);

    include '../data/clienteData.inc';

    if (mysqli_num_rows($log_verifica) <= 0) {
        header("refresh: 5;../cliente.php#paralogin");
        exit("<center><img src='../../images/icons8-atenção.png'><span style='color:orange'>EMAIL E/OU SENHA ERRADOS... REDIRECIONANDO EM 5 SEGUNDOS...</span><img src='../../images/icons8-atenção.png'></center>");
    } else {
        setcookie("Email", $_SESSION['log_email'], time()+60*60*24, '/');
        setcookie("Nome", $log_nome, time()+60*60*24, '/');
        header("refresh: 5;../inicio.php");
        exit("<center><img src='../../images/icons8-ok.png'><span style='color:green'>LOGADO COM SUCESSO !!! REDIRECIONANDO EM 5 SEGUNDOS...</span><img src='../../images/icons8-ok.png'></center>");
    }
} else {
    header("refresh: 5;../cliente.php#paralogin");
    exit("<center><img src='../../images/icons8-erro.png'><span style='color:red'>ALGO DEU ERRADO... REDIRECIONANDO EM 5 SEGUNDOS...</span><img src='../../images/icons8-erro.png'></center>");
}

mysqli_close($conexao);

?>