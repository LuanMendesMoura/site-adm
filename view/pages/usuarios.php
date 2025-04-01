<?php

require_once './../../model/UsuarioModel.php';
$usuarioModel = new UsuarioModel();
$listar_usuarios = $usuarioModel->listar();
?>

<?php require_once './../components/head.php' ?>

<body>
    <?php require_once './../components/navbar.php'; ?>
    <?php require_once './../components/sidebar.php'; ?>

    <main>
        <h1>Usuários</h1>

        <form class="div-btn" action="usuario.php" method="GET">
            <button class="btn btn-primario">
                Novo
            </button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Data Nascimento</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listar_usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario['id'] ?></td>
                        <td><?php echo $usuario['nome'] ?></td>
                        <td><?php echo $usuario['email'] ?></td>
                        <td><?php echo $usuario['telefone'] ?></td>
                        <td><?php echo $usuario['data_nascimento'] ?></td>
                        <td><?php echo $usuario['cpf'] ?></td>
                        <td class="btn-group">
                            <form action="usuario.php" method="GET">
                                <input type="hidden" name="id" value="<?= $usuario['id']; ?>">
                                <button class="btn btn-secundario">
                                    Editar
                                </button>
                            </form>

                            <form action="usuario_excluir.php" method="POST">
                                <input type="hidden" name="id" value="<?= $usuario['id']; ?>">
                                <button class="btn btn-terciario" onclick="return confirm('Tem certaza que deseja excluir este usuario?')">
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