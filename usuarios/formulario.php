<?php

    if(isset($_POST['submit']))
    {
     //   print_r('Nome:' . $_POST['nome']);
     //   print_r('<br>');
        
     //   print_r('Cnpj:' . $_POST['cnpj']);
     //   print_r('<br>');
    
     //   print_r('Telefone:' . $_POST['telefone']);
     //   print_r('<br>');
        
     //   print_r('serviço:' . $_POST['serviço']);
     //   print_r('<br>');
        
     //   print_r('Data:' . $_POST['data']);
     //   print_r('<br>');
        
     //   print_r('Cidade:' . $_POST['cidade']);
     //   print_r('<br>');
        
     //   print_r('Estado:' . $_POST['estado']);
     //   print_r('<br>');
        
     //   print_r('Endereco:' . $_POST['endereco']);
     //   print_r('<br>');
        
     //   print_r('Valor:' . $_POST['valor']);
     //   print_r('<br>');
       
     include_once('conexao.php');

     $nome = $_POST['nome'];
     $cnpj = $_POST['cnpj'];
     $telefone = $_POST['telefone'];
     $serviço = $_POST['serviço'];
     $data_serv = $_POST['data_serv'];
     $cidade = $_POST['cidade'];
     $estado = $_POST['estado'];
     $endereco = $_POST['endereco'];
     $valor = $_POST['valor'];

 
     $result = mysqli_query($conexao, "INSERT INTO  clientes(Nome,cnpj,telefone,serviço,data_serv,cidade,estado,endereco,valor)
     VALUES ('$nome','$cnpj','$telefone','$serviço','$data_serv','$cidade','$estado','$endereco','$valor')");
}
?>
<?php
    //esse codigo é responsável por criptografar a pagina viinculado ao codigo teste login.

    session_start();
    include_once('config.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }
    $logado = $_SESSION['nome'];

    //$sql = "SELECT * FROM usuarios ORDER BY id DESC";

    //$result = $conexao->query($sql);

    //print_r($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario | SERVIÇO</title>

<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right,rgb(20,147,220), rgb(17,54,71));
    }
    .box{
        columns: 2;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        border-radius: 15px;
        width: 50%;
        right: 50%;
        color: white;
    }
    fieldset{
        border: 3px solid dodgerblue; 
    }
    legend{
        border: 1px solid dodgerblue; 
        padding: 10px;
        text-align: center;
        background-color: dodgerblue;
        border-radius: 5px;
        
    }
    .inputbox{
        position: relative;

    }
    .inputUser{
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 3px;
    }
    .labelInput{
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5px;
    }
    .inputUser:focus ~ .labelInput,
    .inputUser:valid ~ .labelInput{
        top: -20px;
        font-size: 12px;
        color: dodgerblue;
    }
    #data_nacimento{
        border: none;
        padding: 8px;
        border-radius: 10px;
        color: dodgerblue;
        outline: none;
        font-size: 15px;
    }
    #submit{
        background-image: linear-gradient(to right,rgb(130, 20, 220), rgb(44, 31, 220));
        width: 100%;
        border: none;
        padding: 10px;
        color: white;
        font-size: 16px;
        cursor: pointer;
        border-radius: 10px;
    }
    #submit:hover{
        background-image: linear-gradient(to right,rgb(27, 20, 220), rgb(102, 14, 184));
    }
    .btn{
        color:white ;
        padding: 5px;
        text-decoration: none;
    }
    button{
        border-radius: 5px;
        text-decoration: none;
        border: none;
        padding: 15px;
        background-image: linear-gradient(to right,rgb(130, 20, 220), rgb(44, 31, 220));

    }
    nav{
        border: 5px solid dodgerblue;
        position: absolute;
        letter-spacing: 3px;
    }
   
    @media screen and (max-width: 400px){
        .box{
            width: 100%;
        }
    }
 

</style>

</head>

<body>

    <nav> 
        
        <!--<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex">--> 
        <button><a href="sair.php" class="btn btn-danger me-5">Sair</a></button>
        
        <!--<button><a href="formularios.php"class="btn btn-danger me-5">Volta</a></button>>-->

        <button><a href="http://localhost/formulario_clientes/adm/index.php"class="btn btn-danger me-5">Cadastrar</a></button>
        <button><a href="http://localhost/formulario_clientes/listar/listar-serv.php"class="btn btn-danger me-5">Listar</a></button>
        
    </nav> 

    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulario de Serviços</b></legend>
                <br><br>

                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>

                <div class="inputbox">
                    <input type="text" name="cnpj" id="cnpj" class="inputUser" required>
                    <label for="cnpj" class="labelInput">Cnpj</label>
                </div>
                <br><br>

                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <p>Serviço de Limpeza</p>
                <input type="radio" id="fachada" name="serviço" value="limpeza de fachada" required>
                <label for="fachada">Fachada</label>

                <input type="radio" id="vidros" name="serviço" value="limpeza de vidros" required>
                <label for="vidros">Vidros</label>

                <input type="radio" id="outro" name="serviço" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>

                <label for="data_serv"><b>data_serv</b></label>
                <input type="date" name="data_serv" id="data_serv" required>  
                <br><br>

                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade"class="labelInput">Cidade</label>
                </div>
                <br><br>

                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado"class="labelInput">Estado</label>
                </div>
                <br><br>

                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco"class="labelInput">Endereço</label>
                </div>
                <br><br> 

                <div class="inputbox">
                    <input type="text" name="valor" id="valor" class="inputUser" required>
                    <label for="valor"class="labelInput">Valor</label>
                </div>
                <br><br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>


    </div>
</body>
</html>