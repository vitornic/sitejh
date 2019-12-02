<div class="container">
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>

    <div class="content">
        <!--FORMULÁRIO DE CONSULTA-->
        <div id="login">
            <form method="post" action="bll/produtoBLL.php">
                <h1>Consultar Produto</h1>
                <p>
                    <label for="c_cod_prod">Codigo</label>
                    <input id="c_cod_prod" name="c_cod_prod" type="number" placeholder="504" />
                </p>

                <p>
                    <label for="c_nome_prod">Nome</label>
                    <input id="c_nome_prod" name="c_nome_prod" type="text" placeholder="Placa Mãe" />
                </p>

                <p>
                    <label for="c_desc_prod">Descricao</label>
                    <input id="c_desc_prod" name="c_desc_prod" type="text" placeholder="Iluminação LED" />
                </p>

                <p>
                    <input type="submit" value="Consultar" name="Consultar" />
                </p>

                <p class="link">
                    Não tem produtos cadastrados ?
                    <a href="#paracadastro">Cadastre aqui</a>
                </p>
            </form>
        </div>

        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">
            <form method="post" action="bll/produtoBLL.php">
                <h1>Cadastro Produto</h1>

                <p>
                    <label for="nome_prod">Nome do Produto</label>
                    <input id="nome_prod" name="nome_prod" required="required" type="text" placeholder="Ex.: Prime h310m-e/br" />
                </p>

                <p>
                    <label for="desc_prod">Descricao do Produto</label>
                    <input id="desc_prod" name="desc_prod" required="required" type="text" placeholder="Placa-mãe Intel LGA-1151 mATX com iluminação LED, DDR4 2666MHz" />
                </p>

                <p>
                    <label for="preco_prod">Preço</label>
                    <input id="preco_prod" name="preco_prod" required="required" type="text" placeholder="400,00" />
                </p>

                <p>
                    <label for="tipo_prod">Tipo</label>
                    <select name="tipo_prod">
                        <option disabled selected>-- NENHUM --</option>
                        <?php
                        include 'data/conexaobd.inc';

                        $sql = "SELECT codigo, nome FROM tipoproduto";
                        $rs = mysqli_query($conexao, $sql);

                        while ($row = mysqli_fetch_assoc($rs)) {
                            $cod  = $row['codigo'];
                            $nome = $row['nome'];
                            echo "<option value=$cod>$nome</option>";
                        }
                        mysqli_close($conexao);
                        ?>;
                    </select>
                </p>

                <p>
                    <label for="foto_prod">Tipo do Produto</label>
                    <input id="foto_prod" name="foto_prod" required="required" type="text" placeholder="placa_mae.jpg" />
                </p>

                <p>
                    <input type="submit" value="Cadastrar" name="Cadastrar" />
                </p>

                <p class="link">
                    Quer ver e/ou editar seus produtos ?
                    <a href="#paralogin"> Ir para Consulta </a>
                </p>
            </form>
        </div>
    </div>
</div>