<?php
require_once "conexao_db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nmr_products = $_POST['nmr_products'];
    $name_products = $_POST['name_products'];
    $products_categories = $_POST['products_categories'];
    $qtde_products = $_POST['qtde_products'];
    $fornecedor = $_POST['fornecedor'];
}
$stmt = $conection->prepare("INSERT INTO estoque (nmr_products, name_products, products_categories, qtde_products, fornecedor ) VALUES (:NUMBER, :NAME, :CATEGORIES, :QTDE, :FORNECEDOR )");

$stmt->bindParam(":NUMBER", $nmr_products);
$stmt->bindParam(":NAME", $name_products);
$stmt->bindParam(":CATEGORIES", $products_categories);
$stmt->bindParam(":QTDE", $qtde_products);
$stmt->bindParam(":FORNECEDOR", $fornecedor);
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container" style="padding-top: 20px;">
        <h4>Produto cadastrado com sucesso!</h4>
        <a href="index.php" role="button" class="btn btn-primary btn-sm"> Cadastrar outro produto</a>

    </div>
</body>

</html>