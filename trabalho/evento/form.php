<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php"; ?>

<div class="container">


<h1>Cadastro de Evento</h1>
<hr>

<form action="<?php echo isset($evento) ? 'atualizar.php' : 'inserir.php' ?>" method="post" enctype="multipart/form-data">

        <label for="nome">Nome do evento</label><br>
        <input type="text" name="nome" id="nome" value="<?php echo $evento['nome'] ?? ""; ?>"><br>
        <input type="hidden" name="id" id="id" value="<?php echo $evento['idevento'] ?? ""; ?>"><br>

        <label for="local">Local</label><br>
        <textarea name="local" id="local"><?php echo $evento['local'] ?? ""; ?></textarea><br>

        <label for="esporte">Esporte do evento</label><br>
        <textarea name="esporte" id="esporte"><?php echo $evento['esporte'] ?? ""; ?></textarea><br>

        <label for="data">Data</label><br>
        <input type="date" name="data" id="data" value="<?php echo $evento['data'] ?? "0.00"; ?>"><br>
        <br>
        <button type="submit">Cadastrar</button>

</form>
</div>
<?php require_once "../template/rodape.php" ?>