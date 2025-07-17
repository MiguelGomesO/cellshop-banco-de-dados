<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <title>Consulta de Vendas de 2024</title> 
    </head>
    <body>
        
        <h2>Vendas Cadastradas de 2024 - DB Cellshop</h2>

        <?php
            include("conexao.php");

            $sql = "SELECT v.data_venda, p.descricao, p.preco FROM itemvenda i JOIN venda v ON i.id_venda = v.id_venda JOIN produto p ON i.id_produto = p.id_produto WHERE YEAR(v.data_venda) = 2024;";
            $resultado = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($resultado) > 0){
                while($venda_2024 = mysqli_fetch_assoc($resultado)){
                    echo "<p>";
                    echo "<strong>Dia da venda: </strong>" . $venda_2024["data_venda"] . "<br>";
                    echo "<strong>Descrição: </strong>" . $venda_2024["descricao"] . "<br>";
                    echo "<strong>Preço: </strong>" . $venda_2024["preco"] . "<br>";
                    echo "</p> <hr>";
                }
            } else {
                echo "<p>Nenhuma venda encontrada em 2024 no banco de dados.</p>";
            }
        ?>
    </body>
</html>