<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">

    <title>Produtos</title>

    <style>
        #btnedit {
            background-color: #FFF;
            color: #FFBF35;
            border: 2px solid #FFBF35;
        }
    </style>
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
                    <th scope="col">Ação</th>
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
                <tr>
                    <td><?php echo $nmr_products ?></td>
                    <td><?php echo $name_products ?></td>
                    <td><?php echo $products_categories ?></td>
                    <td><?php echo $qtde_products ?></td>
                    <td><?php echo $fornecedor ?></td>

                    <td><a class="btn btn-sm" id="btnedit" role="button" href="edit.php?id=<?php echo $id_product ?>" >Editar <i class="fa-solid fa-pen"></i></a></td>


                <?php } ?>

                </tr>


        </table>



    </div>







    <script src="https://kit.fontawesome.com/635eae0cd0.js" crossorigin="anonymous"></script>
    <script src="Bootstrap/js/bootstrap.js"></script>
</body>

</html>