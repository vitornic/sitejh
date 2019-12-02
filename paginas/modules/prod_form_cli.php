<div class="tabelas">
    <?php
    include_once 'data/conexaobd.inc';

    $consulta = "SELECT p.foto, p.nome, p.descricao, t.nome, p.preco FROM produtos as p join tipoproduto as t on p.tipo = t.codigo ";

    $con      = $conexao->query($consulta) or die($conexao->error);

    while ($dado = $con->fetch_array()) { ?>
        <div>
            <table>
                <td>
                    <tr>
                        <td><?php
                        $a = $dado['0'];
                        $foto = "../images/$a";
                        if (file_exists($foto)) {
                            echo "<img src='$foto' width='200px' height='200px'>";
                        } else {
                            echo "<img src='../images/placeholder.png'>";
                        } ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $dado['1'] ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $dado['2'] ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $dado['3'] ?></td>
                    </tr>
                    <tr>
                        <td><?php echo 'R$ '.$dado['4'] ?></td>
                    </tr>
                    <tr>
                        <td><button>COMPRAR</button></td>
                    </tr>
                </td>
            </table>
        </div>
    <?php } mysqli_close($conexao); ?>
</div>