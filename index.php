<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">


    <title>Cadastro</title>

    <style type="text/css">
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
        <h4>Cadastro de Produtos</h4>
        <form action="insert.php" method="POST" style="margin-top: 20px;">
            <div class="form-group">
                <label for="exampleFormControlInput1">Número do Produto</label>
                <input type="number" class="form-control" name="nmr_products" placeholder="Digite o número do produto">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome do Produto</label>
                <input type="text" class="form-control" name="name_products" placeholder="Digite o nome do produto">
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
                <label for="exampleFormControlInput1">Quantidade</label>
                <input type="number" class="form-control" name="qtde_products"
                    placeholder="Digite a quantidade do produto">
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
                <button type="submit" class="btn  btn-sm" id="botao">Cadastrar</button>
            </div>
        </form>

    </div>











    <script src="Bootstrap/js/bootstrap.js"></script>

</body>

</html>