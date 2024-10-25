<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
    <title>Produtos</title>

    <style>
        body {
            background-color: #303030;
        }

        /* Estilo do container da tabela */
        #tableContainer {
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-top: 20px;
            background-color: #f8f9fa;
        }

        /* Estilo da tabela */
        table {
            width: 100%;
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 8px;
        }

        th,
        td {
            text-align: center;
            vertical-align: middle;
        }

        /* Botões */
        #btnedit {
            background-color: #FFF;
            color: #FFBF35;
            border: 2px solid #FFBF35;
        }

        #btnedit2 {
            background-color: #FFF;
            color: #FE3942;
            border: 2px solid #FE3942;
        }

        /* Botão Voltar */
        #btnBack {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        #btnBack:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container" id="myTable">
        <!-- Botão para voltar à tela de cadastro -->
        <a href="add.php" class="btn" id="btnBack">Voltar </a>

        <div id="tableContainer">
            <h3>Produtos cadastrados</h3>
            <table class="table table-striped" style=" margin-top: 40px; ">
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
                        <td>
                            <a class="btn btn-sm" id="btnedit" role="button" href="edit.php?id=<?php echo $id_product ?>">Editar <i class="fa-solid fa-pen"></i></a>
                            <a class="btn btn-sm" id="btnedit2" role="button" href="delete.php?id=<?php echo $id_product ?>">Excluir <i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/635eae0cd0.js" crossorigin="anonymous"></script>
    <script src="Bootstrap/js/bootstrap.js"></script>
</body>

</html>