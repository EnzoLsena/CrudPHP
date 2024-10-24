<?php

require_once "conexao_db.php";

    $id = $_POST['id'];
    $name_products = $_POST['name_products'];
    $products_categories = $_POST['products_categories'];
    $qtde_products = $_POST['qtde_products'];
    $fornecedor = $_POST['fornecedor'];


 $sql = "UPDATE estoque SET  name_products = '$name_products', products_categories= '$products_categories', qtde_products = $qtde_products, fornecedor = '$fornecedor' WHERE id_product = $id";

 $atualizar = mysqli_query($conexao, $sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
        #btnedit {
            background-color: #FFF;
            color: #FF0051;
            border: 2px solid #FF0051;
        }
    </style>
</head>

<body>
    <div class="container">

        <h3>Atualizado com Suecesso!</h3>
        <a class="btn btn-sm" id="btnedit" role="button" href="list_products.php">Voltar <i class="fa-solid fa-pen"></i></a>
    </div>


    <script src="Bootstrap/js/bootstrap.js"></script>

</body>

</html>