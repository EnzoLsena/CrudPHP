<?php
require_once "conexao_db.php";
$id = $_GET['id'];


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">


    <title>Cadastro</title>

    <style type="text/css">
        body {
            background-color: #303030;
        }

        #tamanhoContainer {
            width: 500px;
            padding: 40px;
            background-color: #EBEEF7;
            border: 1px solid #dddddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
        }

        #botao {
            background-color: #5AAD34;
            color: #fff;

        }
    </style>
</head>

<body>
    <div class="container" id="tamanhoContainer" style=" margin-top: 40px; ">
        <h4>Atualizar Produtos</h4>
        <form action="update.php" method="POST" style="margin-top: 20px;">

            <?php
            $sql = "SELECT * FROM `estoque` WHERE `id_product` = $id";
            $buscar = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($buscar)) {
                $id_product = $array['id_product'];
                $nmr_products = $array['nmr_products'];
                $name_products = $array['name_products'];
                $products_categories = $array['products_categories'];
                $qtde_products = $array['qtde_products'];
                $fornecedor = $array['fornecedor'];

            ?>
                <div class="form-group">
                    <label>Número do Produto</label>
                    <input type="number" class="form-control" name="nmr_products" value="<?php echo $nmr_products ?> " disabled>
                    <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>" style="display: none;">

                </div>
                <div class=" form-group">
                    <label>Nome do Produto</label>
                    <input type="text" class="form-control" name="name_products" value="<?php echo $name_products ?>">
                </div>
                <div class="form-group">
                    <label>Selecione a Categoria</label>
                    <select class="form-control" name="products_categories">
                        <option>Celular</option>
                        <option>Desktop</option>
                        <option>Notbook</option>
                        <option>Hardwares</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="qtde_products"
                        value="<?php echo $qtde_products ?>">
                </div>

                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">
                        <option value="João fuleiro">João fuleiro</option>
                        <option value="Kosko primo">Kosko primo</option>
                        <option value="Neca">Neca</option>
                    </select>
                </div>
                <div style="text-align: right;">
                    <button type="submit" class="btn btn-sm" id="botao">Atualizar</button>
                </div>
            <?php } ?>
        </form>

    </div>











    <!--<script src="Bootstrap/js/bootstrap.js"></script>-->

</body>

</html>