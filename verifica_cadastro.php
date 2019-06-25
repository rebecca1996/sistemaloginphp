<?php 


include('conexao.php');
session_start();


include('blocos/css-links.php');

 //so tornar a pg acessiel quando for realizado um post com os caampos de usuario e senha

 if(empty($_POST['usuario']) || empty($_POST['senha']) ){

    header('Location: index.php');
    exit();


}

$criar_usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$criar_senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "INSERT INTO `usuario`(`usuario`, `senha`) VALUES ('{$criar_usuario}', '{$criar_senha}')";

//$result = mysqli_query($conexao, $query) or die("ocorreu um erro e seus registros não foram inseridos");


if (mysqli_query($conexao, $query)) {

    echo '<div class="container my-5">
    <div class="row">
        <div class="col-lg-12">
        <div class="alert alert-success" role="alert">
          Cadastro feito com sucesso. Voce será redirecionado para a página inicial em alguns segundos. 
         </div>
        </div>
    </div>
</div>';
    header("refresh: 2;index.php");




   
} else {
    echo "Erro: " . $query . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);

  
?>



