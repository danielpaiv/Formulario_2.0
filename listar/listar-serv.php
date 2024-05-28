
<?php
    session_start();
    include_once('conexao.php');
    //print_r($_SESSION);
   

    $sql = "SELECT * FROM clientes ORDER BY id DESC";

    $result = $conexao->query($sql);

    //print_r($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Serviços</title>

    <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
    <script src="script.js"></script>

</head>

<body>
    <nav>
    <button><a href="http://localhost/formulario_clientes/usuarios/formulario.php">Voltar</a></button>
    </nav>



<div class="m-5">
    
<label for="filtroNome">Filtrar por nome:</label>
    <input type="text" id="filtroNome">
    <button onclick="filtrarPorNome()">Filtrar</button>

        <table class="box">
            <thead>
                <tr class="table">
                <th scope="col">id</th>
                    <th scope="col">nome</th>
                    <th scope="col">cnpj</th>
                    <th scope="col">telefone</th>
                    <th scope="col">serviço</th>
                    <th scope="col">data_serv</th>
                    <th scope="col">cidade</th>
                    <th scope="col">estado</th>
                    <th scope="col">endereco</th>
                    <th scope="col">valor</th>
                    
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="box">
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['cnpj']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['serviço']."</td>";
                        echo "<td>".$user_data['data_serv']."</td>";
                        echo "<td>".$user_data['cidade']."</td>";
                        echo "<td>".$user_data['estado']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>".$user_data['valor']."</td>";
                                                  
                        echo "</td>";
                    }
                ?>


            </tbody>
        </table>
    </div>   
</body>
</html>