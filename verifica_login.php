<?php

session_start();

//verifica se a sessão existe, para que usuarios n aatutentcados n possam acessar o painel
if(!$_SESSION['usuario']){

    header('Location: index.php');
    exit();

}

?>