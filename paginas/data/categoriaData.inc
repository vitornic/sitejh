<?php

// Bloco responsavel pelo Auto Increment do codigo
@$cd         = "SELECT MAX(codigo) as codigo FROM `tipoproduto`";
@$con        = $conexao->query($cd) or die($conexao->error);
@$array      = $con->fetch_array();
@$codigomax  = $array[0] + 1;

// Seleciona Nome para verificação
@$selecao  = "SELECT nome FROM tipoproduto WHERE nome = '$nome_cat'";
@$con      = $conexao->query($selecao) or die($conexao->error);
@$array    = $con->fetch_array();
@$ver_nome = $array['nome'];

// Prepara o Insert no Banco de Dados
@$sql  = "INSERT INTO tipoproduto VALUES";
@$sql .= "('$codigomax', '$nome_cat', '$desc_cat')";

// Consulta de tipos
@$cat_sql = "SELECT * FROM tipoproduto ";
    if (!empty($c_cod_cat)) {
        $cat_sql = $cat_sql."WHERE codigo = $c_cod_cat";
    } else if (!empty($c_nome_cat)) {
        $cat_sql = $cat_sql."WHERE nome LIKE '%$c_nome_cat%'";
    } else if (!empty($c_desc_cat)) {
        $cat_sql = $cat_sql."WHERE descricao LIKE '%$c_desc_cat%'";
    }
?>