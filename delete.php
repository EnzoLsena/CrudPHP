<?php
require_once "conexao_db.php";

$id = $_GET['id'];

$sql = "DELETE FROM `soft_estoque`.`estoque`
WHERE id_product = $id";

$deletar = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Deletado com Sucesso</title>

    <style>
        body {
            background-color: #303030;
        }

        /* Centralizar o container na tela */
        .full-screen-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* Centraliza verticalmente */
            
        }

        /* Estilo do card */
        .card {
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilo do texto */
        .card h3 {
            color: #28a745;
            font-weight: bold;
        }

        /* Estilo do botão */
        #btnedit {
            background-color: #28a745;
            color: #fff;
            border: none;
            transition: background-color 0.3s;
        }

        /* Efeito hover no botão */
        #btnedit:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="full-screen-container">
        <div class="card p-4 text-center">
            <h3>Deletado com Sucesso!</h3>
            <a class="btn btn-sm mt-3" id="btnedit" role="button" href="list_products.php">
                Voltar <i class="fas fa-arrow-left"></i>
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