<?php 

require_once './../../model/ProdutoModel.php';
require_once './../../model/CategoriaModel.php';
$categoriaModel = new CategoriaModel();
$categorias = $categoriaModel->listar(); 

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
        <form class="form" action="produto_salvar.php" method="POST">
            <input type="hidden" name="id" required value="<?= $produto['id']; ?>">

            <label class="form-label" for="nome">Nome</label>
            <input class="form-input" type="text" id="nome" name="nome" required value="<?php echo $produto['nome'] ?>">

            <label class="form-label" for="descricao">Descrição</label>
            <textarea class="form-input" id="descricao" name="descricao" required><?php echo $produto['descricao'] ?></textarea>

            <label class="form-label" for="id_categoria">Categoria</label>
            <select class="form-input" id="id_categoria" name="id_categoria" required>
                <option value="">Selecione uma Categoria</option>
                <?php foreach ($categorias as $categoria) { ?>
                    <option value="<?php echo $categoria['id']; ?>" 
                        <?php echo ($produto['id_categoria'] == $categoria['id']) ? 'selected' : ''; ?>>
                        <?php echo $categoria['nome']; ?>
                    </option>
                <?php } ?>
            </select>

            <label class="form-label" for="preco">Preço</label>
            <input class="form-input" type="number" min="1" max="99999" step="0.01" id="preco" name="preco" required value="<?php echo $produto['preco'] ?>">

            <div class="form-btn">
                <a href="produtos.php" class="a btn btn-terciario">
                    Cancelar
                </a>
                <button class="btn btn-secundario">
                    Salvar
                </button>
            </div>
        </form>
    </main>
    <?php require_once './../components/footer.php'; ?>
</body>
</html>