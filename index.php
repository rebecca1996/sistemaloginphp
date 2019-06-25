<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include('blocos/css-links.php');
    ?>
    <title>Cadastro de JOGOS</title>
 
</head>

<body>
    <section class="bg-login">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                  
                    <?php  
                        if(isset($_SESSION['nao_autenticado'])){
                        
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    } 
                    
                    unset($_SESSION['nao_autenticado']);
                    
                    ?>
                    <div class="box">
                    <h3 class="title has-text-white">Rebecca's System</h3>
                        <form action="valida.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Seu usuário" autofocus="" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha" required>
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth my-3">Entrar</button>
                            <a href="register.php" class="btn btn-success  is-block">Criar Usuário</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>