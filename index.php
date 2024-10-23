<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="res/menu.css" rel="stylesheet">

    <title>Cadastro</title>
</head>

<body>
    <div class="container" id="tamanhoContainer">
        <h4>Cadastro de Produtos</h4>
        <form action="inserir_dados.php" method="post" style=" margin-top: 40px">
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

            <div class="form-group" name="fornecedor">
                <label>Fornecedor</label>
                <select class="form-control">
                    <option>João fuleiro</option>
                    <option>Kosko primo</option>
                    <option>Neca</option>

                </select>
            </div>
            <div id="btn-cadastro">
                <button type=" button" class="btn btn-success btn-sm">Cadastrar</button>
            </div>
        </form>

    </div>











    <script src="Bootstrap/js/bootstrap.js"></script>

</body>

</html>