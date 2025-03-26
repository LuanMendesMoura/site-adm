<?php
require_once './../../model/ProdutoModel.php';
$produtoModel  = new ProdutoModel();
$lista_produtos = $produtoModel->listar();
?>

<?php require_once './../components/head.php' ?>

<body>
    <?php require_once './../components/navbar.php'; ?>
    <?php require_once './../components/sidebar.php'; ?>

    <main>
        <h1>Produtos</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listar_usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario['id'] ?></td>
                        <td><?php echo $usuario['nome'] ?></td>
                        <td><?php echo $usuario['descricao'] ?></td>
                        <td><?php echo $usuario['categoria'] ?></td>
                        <td><?php echo $usuario['preco'] ?></td>
                        <td>
                            <form action="editar.php" method="GET">
                                <input type="hidden" name="id" value="<?= $usuario['id']; ?>">
                                <button class="icon-btn">
                                    <img class="icon" src="/site-adm/view/assets/img/editar.png" alt="icone editar">
                                </button>
                            </form>

                            <form action="excluir.php" method="POST">
                                <input type="hidden" name="id" value="<?= $usuario['id']; ?>">
                                <button class="icon-btn" onclick="return confirm('Tem certaza que deseja excluir o filme?')">
                                    <img class="icon" src="/site-adm/view/assets/img/deletar.png" alt="icone deletar">
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