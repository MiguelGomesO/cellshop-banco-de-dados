<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consulta Vendas</title>
    </head>
    <body>

        <h2> Vendas Cadastradas - DB Cellshop</h2>

        <?php

            include("conexao.php");

            $sql = "SELECT * FROM venda v JOIN cliente c ON v.id_cliente = c.id_cliente";
            $resultado = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($resultado) > 0){
                while($venda = mysqli_fetch_assoc($resultado)){
                    echo "<p>";
                    echo "<strong> Dia da Venda: </strong>" . $venda["data_venda"] . "<br>";
                    echo "<strong> Cliente: </strong>" . $venda["nome"] . "<br>";
                    echo "</p> <hr>";
                }
            } else {
                echo "<p> Nenhuma venda encontrada no banco de dados </p>";
            }
        ?>
    </body>
</html>