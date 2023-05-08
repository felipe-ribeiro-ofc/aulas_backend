<!DOCTYPE html>
<html lang="pt-br">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <h1>Cadastro de Produto</h1>
        <hr>

        <form action="inserir.php" method="post">
                <label for="nome">Nome</label><br>
                <input type="text" name="nome" id="nome"><br>
                <br>
                <label for="descricao">Descrição</label><br>
                <textarea name="descricao" id="descricao"></textarea><br>
                <br>
                <label for="preco">Preço</label><br>
                <input type="number" step="0.01" name="preco" id="preco"><br>
                <br>
                <label for="foto">Foto</label><br>
                <input type="file" name="foto" id="foto"><br>

                <br>
                <button type="submit">Cadastrar</button>
                <br>
        </form>

</body>

</html>