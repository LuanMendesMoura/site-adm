<?php 

require_once './../../model/CategoriaModel.php';

if (isset($_GET['id'])) {
    $modo = 'EDICAO';
    $categoriaModel = new CategoriaModel();
    $lista_categorias = $categoriaModel->buscarPorId($_GET['id']); 
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
    <form action="">
        <label for="nome">Nome</label>
        <input type="text" id="nome">
        <button class="btn">
            Cancelar
        </button>
        <button class="btn">
            Salvar
        </button>
    </form>
    <?php require_once './../components/footer.php'; ?>
</body>
</html>