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
        <form class="form" action="usuarios.php">
            <label class="form-label" for="nome">Nome</label>
            <input class="form-input" type="text" id="nome" value="<?php echo $usuario['nome'] ?>">
            <label class="form-label" for="email">Email</label>
            <input class="form-input" type="text" id="email" value="<?php echo $usuario['email'] ?>">
            <label class="form-label" for="telefone">Telefone</label>
            <input class="form-input" type="text" id="telefone" value="<?php echo $usuario['telefone'] ?>">
            <label class="form-label" for="data_nascimento">Data Nascimento</label>
            <input class="form-input" type="text" id="data_nascimento" value="<?php echo $usuario['data_nascimento'] ?>">
            <label class="form-label" for="cpf">CPF</label>
            <input class="form-input" type="text" id="cpf" value="<?php echo $usuario['cpf'] ?>">
            <div class="form-btn">
                <form action="usuarios.php">
                    <button class="btn btn-terciario">
                        Cancelar
                    </button>
                </form>
                <form action="usuario_salvar.php">
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