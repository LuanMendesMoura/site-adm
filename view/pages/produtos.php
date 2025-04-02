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

        <form class="div-btn" action="produto.php" method="GET">
            <button class="btn btn-primario">
                Novo
            </button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_produtos as $produto) { ?>
                    <tr>
                        <td><?php echo $produto['id'] ?></td>
                        <td><?php echo $produto['nome'] ?></td>
                        <td><?php echo $produto['descricao'] ?></td>
                        <td><?php echo $produto['categoria_nome'] ?></td>
                        <td><?php echo $produto['preco'] ?></td>
                        <td class="btn-group">
                            <form action="produto.php" method="GET">
                                <input type="hidden" name="id" value="<?= $produto['id']; ?>">
                                <button class="btn btn-secundario">
                                    Editar
                                </button>
                            </form>

                            <form action="produto_excluir.php" method="POST">
                                <input type="hidden" name="id" value="<?= $produto['id']; ?>">
                                <button class="btn btn-terciario" onclick="return confirm('Tem certaza que deseja excluir este produto?')">
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