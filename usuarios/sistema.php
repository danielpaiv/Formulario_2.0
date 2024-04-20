
<?php
    //esse codigo é responsável por criptografar a pagina viinculado ao codigo teste login.

    session_start();
    include_once('config.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['nome'];

    //$sql = "SELECT * FROM usuarios ORDER BY id DESC";

    //$result = $conexao->query($sql);

    //print_r($result);

?>


<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Sistema</title>
       <style>      
          body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right,rgb(20,147,220), rgb(17,54,71));
          }
        </style>
        </head>
    <body>
        <nav>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
            <div class="d-flex">
            
            </div>
        </nav>
        
       
        <br><br><br><br><br><br><br><br>
        <div class="container">
        <ul>
          <a href=""></a>
        </ul>
        </div>





        
    </body>
</html>