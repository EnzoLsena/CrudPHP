<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Início - Sistema de Cadastro de Produtos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Centralizar o container na tela */
        .full-screen-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* Centraliza verticalmente */
            background-color: #303030;
        }

        /* Estilo do card de conteúdo */
        .card {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Estilo dos botões */
        .btn-custom {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        /* Cor e efeito dos botões */
        .btn-success-custom {
            background-color: #28a745;
            color: #fff;
            border: none;
        }

        .btn-success-custom:hover {
            background-color: #218838;
        }

        .btn-secondary-custom {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-secondary-custom:hover {
            background-color: #565e64;
        }
    </style>
</head>

<body>
    <div class="full-screen-container">
        <div class="card">
            <h1 class="mb-4"> Cadastro de Produtos</h1>
            <h1 class="mb-4"><i class="fa-brands fa-php"></i></h1>

            <!-- Botão para Página de Cadastro de Produtos -->
            <a href="add.php" class="btn btn-success-custom btn-custom mb-3">Cadastrar Produtos</a>

            <!-- Botão para Página de Atualizar Produtos -->
            <a href="list_products.php" class="btn btn-secondary-custom btn-custom">Atualizar Produtos</a>
        </div>
    </div>

    <!-- Bootstrap JS e dependências -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome para ícones -->
    <script src="https://kit.fontawesome.com/635eae0cd0.js" crossorigin="anonymous"></script>
</body>

</html>