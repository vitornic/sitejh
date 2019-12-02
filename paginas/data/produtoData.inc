<?php

// Bloco responsavel pelo Auto Increment do codigo
@$cd         = "SELECT MAX(codigo) as codigo FROM `produtos`";
@$con        = $conexao->query($cd) or die($conexao->error);
@$array      = $con->fetch_array();
@$codigomax  = $array[0] + 1;

// Prepara o Insert no Banco de Dados
@$sql  = "INSERT INTO produtos VALUES";
@$sql .= "('$codigomax', '$nome_prod', '$desc_prod', '$preco_prod', '$foto_prod', '$tipo_prod')";

// Consulta de tipos
@$prod_sql = "SELECT * FROM produtos ";
    if (!empty($c_cod_prod)) {
        $prod_sql = $prod_sql."WHERE codigo = $c_cod_prod";
    } else if (!empty($c_nome_prod)) {
        $prod_sql = $prod_sql."WHERE nome LIKE '%$c_nome_prod%'";
    } else if (!empty($c_desc_prod)) {
        $prod_sql = $prod_sql."WHERE descricao LIKE '%$c_desc_prod%'";
    }
?>