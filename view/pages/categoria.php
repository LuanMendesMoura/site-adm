<?php 

require_once './../../model/CategoriaModel.php';

if (isset($_GET['id'])) {
    $modo = 'EDICAO';
    $categoriaModel = new CategoriaModel();
    $categoria = $categoriaModel->buscarPorId( $_GET['id']); 
} else {
    $modo = 'CRIACAO';
    $categoria = [
        'id'=> '',
        'nome'=> '',
    ];
}

?>

<?php require_once './../components/head.php'; ?>

<body>
    <?php require_once './../components/navbar.php'; ?>
    <?php require_once './../components/sidebar.php'; ?>

    <main class="main-form">
        <form class="form" action="categoria_salvar.php" method="POST">
            <input type="hidden" name="id" value="<?= $categoria['id'] ?>">

            <label class="form-label" for="nome">Nome</label>
            <input  class="form-input" type="text" id="nome" name="nome" required value="<?php echo $categoria['nome'] ?>">

            <div class="form-btn">
                <a href="categorias.php" class="a btn btn-terciario">
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