<?php require_once "consultar_por_id.php"; ?>
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

        <form action="<?php echo isset($linha) ? 'atualizar.php' : 'inserir.php'?>" method="post">
                <label for="nome">Nome</label><br>
                <input type="text" name="nome" id="nome" value="<?php echo $linha['nome'] ?? "";?>"><br>
                <input type="hidden" name="id" id="id" value="<?php echo $linha['idproduto'] ?? "";?>"><br>
                <br>
                <label for="descricao">Descrição</label><br>
                <textarea name="descricao" id="descricao"><?php echo $linha['descricao'] ?? "";?></textarea><br>
                <br>
                <label for="preco">Preço</label><br>
                <input type="number" step="0.01" name="preco" id="preco" value="<?php echo $linha['preco'] ?? "";?>"><br>
                <br>
                <label for="foto">Foto</label><br>
                <input type="file" name="foto" id="foto" value="<?php echo $linha['foto'] ?? "0,00";?>"><br>

                <br>
                <button type="submit">Cadastrar</button>
                <br>
        </form>

</body>

</html>