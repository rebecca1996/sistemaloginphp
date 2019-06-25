<?php

session_start();


// unset($_SESSION['nome da sessão']); - destuiri uma sessão só

//pega todas as sessões e destoi todas
session_destroy();

header('Location: index.php');
exit();





?>