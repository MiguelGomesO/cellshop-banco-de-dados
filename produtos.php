<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consulta de Produtos</title>
    </head>
    <body>

        <h2> Produtos Cadastrados - DB Cellshop</h2>
        
        <?php
            include("conexao.php");

            $sql = "SELECT * FROM produto";
            $resultado = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($resultado) > 0){

                while($produto = mysqli_fetch_assoc($resultado)){
                    
                    echo "<p>";
                    echo "<strong>Descrição: </strong>" . $produto["descricao"] . "<br>";
                    echo "<strong>Preço: </strong> R$ " . $produto["preco"] . "<br>";
                    echo "<p> <hr>";
                }

            } else {
                echo "<p>Nenhum produto encontrado no banco de dados.</p>";
            }

            mysqli_close($conexao);
        ?>
    </body>
</html>