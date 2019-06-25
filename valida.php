<?php

    session_start();

    include('conexao.php'); 

    //so tornar a pg acessiel quando for realizado um post com os caampos de usuario e senha

    if(empty($_POST['usuario']) || empty($_POST['senha']) ){

            header('Location: index.php');
            exit();


    }

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    //verificar se o login está correto ou não

    $query = "SELECT usuario_id, usuario FROM usuario WHERE usuario = '{$usuario}' and senha = '{$senha}'";

    $result = mysqli_query($conexao, $query);


    $rows = mysqli_num_rows($result);

    if($rows == 1){

      //armazenar em uma sessão o user name para sabermos de o usuario fo autenticado ou não

      $_SESSION['usuario'] = $usuario;
      header('Location: painel.php');
      exit();


    }

    else{

        $_SESSION['nao_autenticado'] = true;
        header('Location: index.php');
        exit();

    }


?>