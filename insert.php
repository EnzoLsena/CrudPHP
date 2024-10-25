<?php
require_once "conexao_db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nmr_products = $_POST['nmr_products'];
    $name_products = $_POST['name_products'];
    $products_categories = $_POST['products_categories'];
    $qtde_products = $_POST['qtde_products'];
    $fornecedor = $_POST['fornecedor'];
}
$sql = "INSERT INTO `estoque` (`nmr_products`, `name_products`, `products_categories`, `qtde_products`, `fornecedor` ) VALUES ($nmr_products, '$name_products', '$products_categories', $qtde_products, '$fornecedor')";

$insert = mysqli_query($conexao, $sql);

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Deletado com Sucesso</title>

    <style>
        body {
            background-color: #303030;
        }

        
        .full-screen-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            

        }

        
        .card {
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        
        .card h3 {
            color: #28a745;
            font-weight: bold;
        }

        
        #btnedit {
            background-color: #28a745;
            color: #fff;
            border: none;
            transition: background-color 0.3s;
        }

        
        #btnedit:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="full-screen-container">
        <div class="card p-4 text-center">
            <h3>Cadastro efetuado com Sucesso!</h3>
            <a class="btn btn-sm mt-3" id="btnedit" role="button" href="list_products.php">
                Cadastrar um novo <i class="fas fa-arrow-left"></i>
            </a>
        </div>
    </div>

    <!-- Font Awesome para ícones -->
    <script src="https://kit.fontawesome.com/635eae0cd0.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS e dependências -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>