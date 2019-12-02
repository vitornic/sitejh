<link href="../../css/estilos.css" rel="stylesheet">
<title>Consulta Categoria</title>
<?php

include_once '../data/conexaobd.inc';

if (isset($_POST['Cadastrar'])) { // Ao clicar no botão Cadastrar
    $nome_cat      = trim($_POST['nome_cat']);
    $desc_cat      = trim($_POST['desc_cat']);

    include '../data/categoriaData.inc';

    if ($nome_cat == $ver_nome) {
        header("refresh: 5;../categorias.php");
        exit("<center><img src='../../images/icons8-atenção.png'><span style='color:orange'>CATEGORIA JÁ CADASTRADA !!! REDIRECIONANDO EM 5 SEGUNDOS...</span><img src='../../images/icons8-atenção.png'></center>");
    } else if ($conexao->query($sql) == TRUE) {
        header("refresh: 5;../categorias.php");
        exit("<center><img src='../../images/icons8-ok.png'><span style='color:green'>CADASTRADO COM SUCESSO !!! REDIRECIONANDO EM 5 SEGUNDOS...</span><img src='../../images/icons8-ok.png'></center>");
    } else {
        header("refresh: 5;../categorias.php");
        exit("<center><img src='../../images/icons8-erro.png'><span style='color:red'>OOPS... ALGO DEU ERRADO !!! REDIRECIONANDO EM 5 SEGUNDOS...</span><img src='../../images/icons8-erro.png'></center>");
    }
} else if (isset($_POST['Consultar'])) { // Ao clicar no botão Consultar
    $c_cod_cat  = $_POST['c_cod_cat'];
    $c_nome_cat = trim($_POST['c_nome_cat']);
    $c_desc_cat = trim($_POST['c_desc_cat']);

    include '../data/categoriaData.inc';

    echo "<script>console.log(`$cat_sql`)</script>";

    $rs = mysqli_query($conexao, $cat_sql) or die('ERRO AO CONSULTAR');
    $total = mysqli_num_rows($rs);
    echo "<center><span style='color:#d35400'>TOTAL DE REGISTROS: $total</span></center>";

    echo "<center>";

    if ($total > 0) {
        echo "<table>
                <tr>
                    <td>#</td>
                    <td>NOME</td>
                    <td>DESCRICAO</td>
                    <td>EDITAR</td>
                    <td>EXCLUIR</td>
                </tr>";
    }

    while ($linha = mysqli_fetch_assoc($rs)) {
        $cod = $linha['codigo'];
        $nome = $linha['nome'];
        $desc = $linha['descricao'];

        echo "<div class='content'><tr class='tabelas'>
                        <td>$cod</td>
                        <td>$nome</td>
                        <td>$desc</td>
                        <td><a href='categoriaBLL.php?op=E&codigo=$cod'><img src='../../images/icons8-editar-arquivo.png' width='50px' height='50px'></a></td>
                        <td><a href='categoriaBLL.php?op=X&codigo=$cod'><img src='../../images/icons8-remover.png' width='50px' height='50px'></a></td>
                    </tr>";
        echo "</center></div>";
    }
} else {
    if (count($_GET) > 0) {
        if (!isset($_SESSION)) { //Verificar se a sessão não já está aberta.
            session_start();
        }

        $paginaAtual = $_SERVER['HTTP_REFERER'];

        $oper = $_GET['op'];
        $cod = $_GET['codigo'];
        //$_SESSION['codigotipo'] = $cod;

        echo '<script>console.log("Operacao = ' . $oper . ' codigo = ' . $cod . '")</script>';

        if ($oper == 'X') {
            $sql = "DELETE FROM tipoproduto WHERE codigo = $cod";

            $rs = mysqli_query($conexao, $sql) or die('<center><span style="color:#ff0000">ERRO DE EXCLUSÃO</span></center>');
            header("refresh: 5;../categorias.php#paralogin");
                exit("<center><img src='../../images/icons8-ok.png'><span style='color:green'>EXCLUIDO COM SUCESSO !!! REDIRECIONANDO EM 5 SEGUNDOS...</span><img src='../../images/icons8-ok.png'></center>");
        } else if ($oper == 'E') {
            echo '<div class="content"> <form method="POST" action="">
                    <h1>EDITAR</h1>
                    <input type="text" disabled placeholder="CODIGO ' . $cod . '"</input><br>
                    <input type="text" required="true" name="txtDesc" placeholder="DESCRICAO"><br>
                    <input type="text" name="txtNome" placeholder="NOME"><br>
                    <br><input type="submit" value="ATUALIZAR"><br>
                </form></div>';
            if (count($_POST) > 0) {

                $newName = $_POST['txtNome'];
                $newdesc = $_POST['txtDesc'];
                $sql = "UPDATE tipoproduto SET descricao='$newdesc' WHERE codigo = $cod";
                if (!empty($newName)) {
                    $sql = "UPDATE tipoproduto SET nome = '$newName', descricao='$newdesc' WHERE codigo = $cod";
                }

                $rs = mysqli_query($conexao, $sql) or die('<center><span style="color:#ff0000">ERRO AO EDITAR</span></center>');
                header("refresh: 5;../categorias.php#paralogin");
                exit("<center><img src='../../images/icons8-ok.png'><span style='color:green'>EDITADO COM SUCESSO !!! REDIRECIONANDO EM 5 SEGUNDOS...</span><img src='../../images/icons8-ok.png'></center>");
            }
        }
    }
}

mysqli_close($conexao);
?>