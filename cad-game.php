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
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/painel.css">
    <title>Cadastro de Jogos</title>
  </head>
  <body>
    

  <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
</nav>
<div class="container-fluid">
  <div class="sidebar">
    <ul class="sidebar-menu">
      <li class="sidebar-header sidebar-item">Ola, <?php  echo $_SESSION['usuario']; ?></li>
      <li class="sidebar-item">
        <a href="#" class="sidebar-link">
          <i class="fa fa-th"></i> <span>Cadastrar</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a href="#" class="sidebar-link">
          <i class="fa fa-envelope"></i> <span>Listar</span>
        </a>
      </li>
      <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fa fa-book"></i> <span>Editar</span></a></li>
      <li class="sidebar-header sidebar-item">Configurações</li>
      <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fa fa-circle-o"></i> <span>Modo Noturno</span></a></li>
      <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fa fa-circle-o"></i> <span>Perfil</span></a></li>
      <li class="sidebar-item"><a href="#" class="sidebar-link logout"  data-toggle="modal" data-target="#exampleModal">
      <i class="fa fa-circle-o"></i> <span>Sair</span></a>
      
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo sair?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Voce quer mesmo se desconectar da sessão? Alterações não salvas serão perdidas. 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="logout.php" type="button" class="btn btn-danger">Sair</a>
              
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
      
      </li>
      
     

      





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>