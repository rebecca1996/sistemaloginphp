<?php
if (isset( $_SESSION ))
{
   session_start();
}
include('verifica_login.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    include('blocos/css-links.php');
    ?>
    <title>Cadastro de Jogos</title>
    </head>

  <body>

    <!-- nav -->

    <?php
    include('blocos/nav.php');
    ?>

    <!-- fim da nav -->

    <!-- conteudo pagina inicial do painel -->

    <div class="main bg-login">

      <div class="jumbotron" id="perfil">
      <img src="https://scontent.fudi1-1.fna.fbcdn.net/v/t1.0-9/61300988_2192088264174444_3913690052563042304_n.jpg?_nc_cat=103&_nc_oc=AQn1-5FP6qmRF4BVBoAGEgsQxvDhAVTYxKSUQi8NeOgtqRnpLpD8IXm279397FonUY8&_nc_ht=scontent.fudi1-1.fna&oh=7e2c6dc86375b19bd0b5a30cdd28fcc1&oe=5DC5ED18" 
      class="rounded mx-auto d-block avatar" alt="Perfil Image">
      <p class="h4 my-4">Olá,  <?php  echo $_SESSION ['usuario']?></p>
      
      <p class="lead">Seja bem vindo(a) ao Rebecca's System. Suas tearefas estão esperando por você.</p>
      <hr class="my-4">
      <p>Para saber mais sobre o ideia do projeto, Clique aqui.</p>
      <a class="btn btn-primary btn-lg my-3" href="#" role="button">Saiba Mais</a>
     </div>
    </div>
   
 

     <!-- conteudo pagina inicial do painel -->
      
     <?php
    include('blocos/scripts-links.php');
    ?>
  
  </body>
</html>