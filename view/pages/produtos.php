<?php
require_once './../../model/ProdutoModel.php';
$produtoModel  = new ProdutoModel();
$lista_produtos = $produtoModel->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php require_once './../components/head.php' ?>

<body>
    <?php require_once './../components/navbar.php'; ?>
    <?php require_once './../components/sidebar.php'; ?>

    <main>
        <h1>Produtos</h1>
        <div class="produtos">
            <?php foreach ($lista_produtos as $produto) { ?>
                <div class="produto">
                    <h2>ID : <?php echo $produto['id'] ?></h2>
                    <span>
                        <h2>Nome :</h2> <?php echo $produto['nome'] ?>
                    </span>
                    <span>
                        <h2>Descrição :</h2> <?php echo $produto['descricao'] ?>
                    </span>
                    <span>
                        <h2>Categoria :</h2> <?php echo $produto['categoria'] ?>
                    </span>
                    <span>
                        <h2>Preço :</h2> <?php echo $produto['preco'] ?>
                    </span>
                    <i>
                        <form action="editar.php" method="GET">
                            <input type="hidden" name="id" value="<?= $produto['id']; ?>">
                            <button class="icon-btn">
                                <img class="icon" src="/site-adm/view/assets/img/editar.png" alt="icone editar">
                            </button>
                        </form>
                        <form action="excluir.php" method="POST">
                            <input type="hidden" name="id" value="<?= $produto['id']; ?>">
                            <button class="icon-btn" onclick="return confirm('Tem certaza que deseja excluir o filme?')">
                                <img class="icon" src="/site-adm/view/assets/img/deletar.png" alt="icone editar">
                            </button>
                        </form>
                    </i>
                </div>
            <?php } ?>
        </div>
    </main>

    <?php require_once './../components/footer.php'; ?>
</body>

</html>