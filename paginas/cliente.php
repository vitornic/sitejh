<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Clientes</title>
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
                    <!--FORMULÁRIO DE LOGIN-->
                    <div id="login">
                        <form method="post" action="bll/clienteBLL.php">
                            <h1>Login</h1>
                            <p>
                                <label for="email_login">Seu e-mail</label>
                                <input id="email_login" name="email_login" required="required" type="text" placeholder="contato@htmlecsspro.com" />
                            </p>

                            <p>
                                <label for="senha_login">Sua senha</label>
                                <input id="senha_login" name="senha_login" required="required" type="password" placeholder="1234" />
                            </p>

                            <p>
                                <input type="submit" value="Logar" name="Logar" />
                            </p>

                            <p class="link">
                                Ainda não tem conta?
                                <a href="#paracadastro">Registre-se</a>
                            </p>
                        </form>
                    </div>

                    <!--FORMULÁRIO DE CADASTRO-->
                    <div id="cadastro">
                        <form method="post" action="bll/clienteBLL.php">
                            <h1>Registro</h1>

                            <p>
                                <label for="nome_cad">Seu nome</label>
                                <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Luiz Augusto" />
                            </p>

                            <p>
                                <label for="email_cad">Seu e-mail</label>
                                <input id="email_cad" name="email_cad" required="required" type="email" placeholder="exemple@exemple.com" />
                            </p>

                            <p>
                                <label for="senha_cad">Sua senha</label>
                                <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="1234" />
                            </p>

                            <p>
                                <label for="senha_cad">Confirme Sua senha</label>
                                <input id="senha_cad" name="conf_senha_cad" required="required" type="password" placeholder="1234" />
                            </p>

                            <p>
                                <input type="submit" value="Cadastrar" name="Cadastrar" />
                            </p>

                            <p class="link">
                                Já tem conta?
                                <a href="#paralogin"> Ir para Login </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>