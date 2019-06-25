<?php



$conexao = mysqli_connect ("localhost","root","","login");

if(mysqli_connect_error()){
    echo '<div class="my-5 alert alert-danger container" role="alert">
           Erro : 
           </div>'. mysqli_connect_error();
    die();
}



?>