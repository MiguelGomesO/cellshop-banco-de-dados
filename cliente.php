<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consulta de Clientes</title>
    </head>
    <body>
        <h2>Clientes Cadastrados - DB Cellshop</h2>

        <?php
            include("conexao.php");

            $sql = "SELECT * FROM cliente";
            $resultado = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($resultado) > 0){
                while($cliente = mysqli_fetch_assoc($resultado)){
                    echo "<p>";
                    echo "<strong>Nome: </strong>" . $cliente["nome"] . "<br>";
                    echo "<strong>CPF: </strong>" . $cliente["cpf"] . "<br>";
                    echo "<strong>Email: </strong>" . $cliente["email"] . "<br>";
                    echo "<strong>Telefone: </strong>" . $cliente["telefone"] . "<br>";
                    echo "</p><hr>";
                }
            } else {
                echo "<p>Nenhum cliente encontrado no banco. </p>";
            }

            mysqli_close($conexao);
        ?>
    </body>
</html>
