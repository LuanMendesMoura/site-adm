<?php 

require_once './../../model/ProdutoModel.php';

if (isset($_GET['id'])) {
    $modo = 'EDICAO';
    $produtoModel = new ProdutoModel();
    $produto = $produtoModel->buscarPorId($_GET['id']); 
} else {
    $modo = 'CRIACAO';
    $produto = [
        'id'=> '',
        'nome'=> '',
        'descricao'=> '',
        'id_categoria'=> '',
        'preco'=> '',
    ];
}

?>

<?php require_once './../components/head.php'; ?>

<body>
    <?php require_once './../components/navbar.php'; ?>
    <?php require_once './../components/sidebar.php'; ?>
    <main class="main-form">
        <form class="form" action="produtos.php">
            <label class="form-label" for="nome">Nome</label>
            <input class="form-input" type="text" id="nome" value="<?php echo $produto['nome'] ?>">
            <label class="form-label" for="descricao">Descrição</label>
            <textarea class="form-input" id="descricao"><?php echo $produto['descricao'] ?></textarea>
            <label class="form-label" for="id_categoria">Categoria</label>
            <input class="form-input" type="text" id="id_categoria" value="<?php echo $produto['id_categoria'] ?>">
            <label class="form-label" for="preco">Preço</label>
            <input class="form-input" type="text" id="preco" value="<?php echo $produto['preco'] ?>">
            <div class="form-btn">
                <form action="produtos.php">
                    <button class="btn btn-terciario">
                        Cancelar
                    </button>
                </form>
                <form action="produto_salvar.php">
                    <button class="btn btn-secundario">
                        Salvar
                    </button>
                </form>
            </div>
        </form>
    </main>
    <?php require_once './../components/footer.php'; ?>
</body>
</html>