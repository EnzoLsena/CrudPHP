<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="res/table.css" rel="stylesheet">
    <title>Produtos</title>
</head>

<body>

    <div class="container" id="myTable">
        <h3>Produtos cadastrados</h3>
        <table class="table" style="margin-top: 20px">
            <thead>
                <tr>
                    <th scope="col">N° do Produto</th>
                    <th scope="col">Nome do Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                </tr>
            </thead>

            <?php

            require_once "conexao_db.php";
            $sql = "SELECT * FROM `estoque`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_product = $array['id_product'];
                $nmr_products = $array['nmr_products'];
                $name_products = $array['name_products'];
                $products_categories = $array['products_categories'];
                $qtde_products = $array['qtde_products'];
                $fornecedor = $array['fornecedor'];


            ?>
                <tr><?php 
                    echo "<td>$nmr_products</td>";
                    echo "<td>$name_products</td>";
                    echo "<td>$products_categories</td>";
                    echo "<td>$qtde_products</td>";
                    echo "<td>$fornecedor</td>";
                    ?>
                <?php } ?>

                </tr>


        </table>



    </div>







    <script src="Bootstrap/js/bootstrap.js"></script>
</body>

</html>