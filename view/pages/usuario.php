<?php 

require_once './../../model/UsuarioModel.php';

if (isset($_GET['id'])) {
    $modo = 'EDICAO';
    $usuarioModel = new UsuarioModel();
    $usuario = $usuarioModel->buscarPorId($_GET['id']); 
} else {
    $modo = 'CRIACAO';
    $usuario = [
        'id'=> '',
        'nome'=> '',
        'email'=> '',
        'telefone'=> '',
        'data_nascimento'=> '',
        'cpf'=> '',
    ];
}

?>

<?php require_once './../components/head.php'; ?>

<body>
    <?php require_once './../components/navbar.php'; ?>
    <?php require_once './../components/sidebar.php'; ?>
    <main class="main-form">
        <form class="form" action="usuario_salvar.php" method="POST">
            <input type="hidden" name="id" value="<?= $usuario['id']; ?>">

            <label class="form-label" for="nome">Nome</label>
            <input class="form-input" type="text" id="nome" name="nome" required value="<?php echo $usuario['nome'] ?>">

            <label class="form-label" for="email">Email</label>
            <input class="form-input" type="text" id="email" name="email" required value="<?php echo $usuario['email'] ?>">

            <label class="form-label" for="telefone">Telefone</label>
            <input class="form-input" type="text" id="telefone" name="telefone" required value="<?php echo $usuario['telefone'] ?>">

            <label class="form-label" for="data_nascimento">Data Nascimento</label>
            <input class="form-input" type="text" id="data_nascimento" name="data_nascimento" required value="<?php echo $usuario['data_nascimento'] ?>">
            
            <label class="form-label" for="cpf">CPF</label>
            <input class="form-input" type="text" id="cpf" name="cpf" required value="<?php echo $usuario['cpf'] ?>">

            <div class="form-btn">
                <a href="usuarios.php" class="a btn btn-terciario">
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