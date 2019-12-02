<?php
if (!isset($_SESSION)) {
    session_start();
}
// Seleciona Email para verificação
@$selecao  = "SELECT email FROM `admin` WHERE email = '$email'";
@$con      = $conexao->query($selecao) or die($conexao->error);
@$array    = $con->fetch_array();
@$Email    = $array['email'];

// Bloco responsavel pelo Auto Increment do codigo
@$consulta   = "SELECT MAX(codigo) as codigo FROM `admin`";
@$con        = $conexao->query($consulta) or die($conexao->error);
@$array      = $con->fetch_array();
@$codigomax  = $array[0] + 1;

// Prepara o Insert no Banco de Dados
@$sql  = "INSERT INTO `admin` VALUES";
@$sql .= "('$codigomax', '$nome', '$email', '$senha')";

// Verifica email e senha no banco de dados
@$log_email = $_SESSION['log_email'];
@$log_senha = $_SESSION['log_senha'];
@$log_verifica = $conexao->query("SELECT * FROM `admin` WHERE email = '$log_email' AND senha = '$log_senha'") or die("erro ao selecionar");

// Retorna o nome do dono do email correspondente
@$log_con    = $conexao->query("SELECT nome FROM `admin` WHERE email = '$log_email'") or die("erro ao selecionar");
@$log_array  = $log_con->fetch_array();
@$log_nome   = $log_array[0];
?>