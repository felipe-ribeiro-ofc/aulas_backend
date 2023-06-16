<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>
<div class="container">
    <h1>Eventos</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class="btn btn-success">Inserir Evento</a>
        <a href="../site/index.php" class="btn btn-dark">Página inicial do site</a>
    </div>
    <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Nome do Evento</th>
                <th scope="col">Esporte do Evento</th>
                <th scope="col">Data do Evento</th>
                <th scope="col">Local do Evento</th>
                <th scope="col">Alterações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventos as $evento) { ?>
                <tr>
                    <td scope="row"><?php echo $evento['nome'] ?></td>
                    <td><?php echo $evento['esporte'] ?></td>
                    <td><?php echo $evento['data'] ?></td>
                    <td><?php echo $evento['local'] ?></td>
                    <td>
                        <a href="excluir.php?id=<?php echo $evento['idevento']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Excluir</a>
                        <a href="form.php?id=<?php echo $evento['idevento']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>Atualizar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php require_once "../template/rodape.php" ?>