<?php

require_once './../../model/CategoriaModel.php';

$categoriaModel = new CategoriaModel();
$lista_categorias = $categoriaModel->listar();

?>

<?php require_once './../components/head.php' ?>

<body>
    <?php require_once './../components/navbar.php'; ?>
    <?php require_once './../components/sidebar.php'; ?>

    <main>
        <h1>Categorias</h1>
        
        <form class="div-btn" action="categoria.php" method="GET">
            <button class="btn btn-primario">
                Novo
            </button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_categorias as $categoria) { ?>
                    <tr>
                        <td><?php echo $categoria['id'] ?></td>
                        <td><?php echo $categoria['nome'] ?></td>
                        <td class="btn-group">
                            <form action="categoria.php" method="GET">
                                <input type="hidden" name="id" value="<?= $categoria['id']; ?>">
                                <button class="btn btn-secundario">
                                    Editar
                                </button>
                            </form>

                            <form action="excluir.php" method="POST">
                                <input type="hidden" name="id" value="<?= $categoria['id']; ?>">
                                <button class="btn btn-terciario" onclick="return confirm('Tem certaza que deseja excluir o filme?')">
                                    Deletar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <?php require_once './../components/footer.php'; ?>
</body>

</html>