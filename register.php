<?php   include('conexao.php');session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    include('blocos/css-links.php');
    ?>
    <title>Cadastrar Usuário</title>
</head>
<body>
<section class="bg-login">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <div class="box">
                    <h3 class="title has-text-white">Cadastro de Usuario</h3>
                        <form action="verifica_cadastro.php" method="POST" name="f1">
                            <div class="field">
                                <div class="control">
                                    <input required  name="usuario" type="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input required  name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input required  name="confirma_senha" class="input is-large" type="password" placeholder="Confirme Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth my-3">Cadastrar</button>
                            <a href="index.php" class="btn btn-danger is-block">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
</html>


