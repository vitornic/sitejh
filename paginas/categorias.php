<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Categorias</title>
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
            <div class="container">
                <a class="links" id="paracadastro"></a>
                <a class="links" id="paralogin"></a>

                <div class="content">
                    <!--FORMULÁRIO DE CONSULTA-->
                    <div id="login">
                        <form method="post" action="bll/categoriaBLL.php">
                            <h1>ConsultaCategoria</h1>
                            <p>
                                <label for="c_cod_cat">Codigo</label>
                                <input id="c_cod_cat" name="c_cod_cat" type="number" placeholder="504" />
                            </p>

                            <p>
                                <label for="c_nome_cat">Nome</label>
                                <input id="c_nome_cat" name="c_nome_cat" type="text" placeholder="Placa Mãe" />
                            </p>

                            <p>
                                <label for="c_desc_cat">Descricao</label>
                                <input id="c_desc_cat" name="c_desc_cat" type="text" placeholder="Iluminação LED" />
                            </p>

                            <p>
                                <input type="submit" value="Consultar" name="Consultar" />
                            </p>

                            <p class="link">
                                Não tem categorias cadastradas ?
                                <a href="#paracadastro">Cadastre aqui</a>
                            </p>
                        </form>
                    </div>

                    <!--FORMULÁRIO DE CADASTRO-->
                    <div id="cadastro">
                        <form method="post" action="bll/categoriaBLL.php">
                            <h1>CadastroCategoria</h1>

                            <p>
                                <label for="nome_cat">Nome Categoria</label>
                                <input id="nome_cat" name="nome_cat" required="required" type="text" placeholder="Ex.: Prime h310m-e/br" />
                            </p>

                            <p>
                                <label for="desc_cat">Descricao Categoria</label>
                                <input id="desc_cat" name="desc_cat" required="required" type="text" placeholder="Placa-mãe Intel LGA-1151 mATX com iluminação LED, DDR4 2666MHz" />
                            </p>

                            <p>
                                <input type="submit" value="Cadastrar" name="Cadastrar" />
                            </p>

                            <br>
                            <br>
                            <br>
                            <br>
                            <br>

                            <p class="link">
                                Quer ver e/ou editar suas categorias ?
                                <a href="#paralogin"> Ir para Consulta </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>