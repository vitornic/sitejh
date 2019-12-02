<?php

$conexao = mysqli_connect('localhost','root','','hardmax');
// rede, usuario, senha, nome do Banco de Dados
$conexao->set_charset('utf-8');

if (!$conexao->set_charset('utf8')) {
    printf("Error loading character set utf8: %s\n", $conexao->error);
    exit;
}

if ($conexao->connect_error) {
	die("Falha" . $conexao->connect_error);
}

?>