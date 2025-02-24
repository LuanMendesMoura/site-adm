<?php

$usuarios = [
    [
        'id' => 1,
        'nome' => 'João Silva',
        'email' => 'joao.silva@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0001',
        'data_nascimento' => '1990-01-15',
        'cpf' => '123.456.789-01',
        'genero' => 'Masculino',
    ],
    [
        'id' => 2,
        'nome' => 'Maria Oliveira',
        'email' => 'maria.oliveira@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0002',
        'data_nascimento' => '1985-02-20',
        'cpf' => '123.456.789-02',
        'genero' => 'Feminino',
    ],
    [
        'id' => 3,
        'nome' => 'Carlos Souza',
        'email' => 'carlos.souza@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0003',
        'data_nascimento' => '1992-03-25',
        'cpf' => '123.456.789-03',
        'genero' => 'Masculino',
    ],
    [
        'id' => 4,
        'nome' => 'Ana Lima',
        'email' => 'ana.lima@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0004',
        'data_nascimento' => '1995-04-10',
        'cpf' => '123.456.789-04',
        'genero' => 'Feminino',
    ],
    [
        'id' => 5,
        'nome' => 'Pedro Santos',
        'email' => 'pedro.santos@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0005',
        'data_nascimento' => '1988-05-30',
        'cpf' => '123.456.789-05',
        'genero' => 'Masculino',
    ],
    [
        'id' => 6,
        'nome' => 'Juliana Costa',
        'email' => 'juliana.costa@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0006',
        'data_nascimento' => '1991-06-12',
        'cpf' => '123.456.789-06',
        'genero' => 'Feminino',
    ],
    [
        'id' => 7,
        'nome' => 'Lucas Almeida',
        'email' => 'lucas.almeida@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0007',
        'data_nascimento' => '1994-07-05',
        'cpf' => '123.456.789-07',
        'genero' => 'Masculino',
    ],
    [
        'id' => 8,
        'nome' => 'Fernanda Rocha',
        'email' => 'fernanda.rocha@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0008',
        'data_nascimento' => '1990-08-21',
        'cpf' => '123.456.789-08',
        'genero' => 'Feminino',
    ],
    [
        'id' => 9,
        'nome' => 'Ricardo Mendes',
        'email' => 'ricardo.mendes@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0009',
        'data_nascimento' => '1987-09-09',
        'cpf' => '123.456.789-09',
        'genero' => 'Masculino',
    ],
    [
        'id' => 10,
        'nome' => 'Camila Nogueira',
        'email' => 'camila.nogueira@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0010',
        'data_nascimento' => '1993-10-14',
        'cpf' => '123.456.789-10',
        'genero' => 'Feminino',
    ],
    [
        'id' => 11,
        'nome' => 'Eduardo Ramos',
        'email' => 'eduardo.ramos@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0011',
        'data_nascimento' => '1989-11-17',
        'cpf' => '123.456.789-11',
        'genero' => 'Masculino',
    ],
    [
        'id' => 12,
        'nome' => 'Bianca Ferreira',
        'email' => 'bianca.ferreira@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0012',
        'data_nascimento' => '1996-12-22',
        'cpf' => '123.456.789-12',
        'genero' => 'Feminino',
    ],
    [
        'id' => 13,
        'nome' => 'Gustavo Teixeira',
        'email' => 'gustavo.teixeira@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0013',
        'data_nascimento' => '1986-01-08',
        'cpf' => '123.456.789-13',
        'genero' => 'Masculino',
    ],
    [
        'id' => 14,
        'nome' => 'Larissa Carvalho',
        'email' => 'larissa.carvalho@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0014',
        'data_nascimento' => '1997-02-26',
        'cpf' => '123.456.789-14',
        'genero' => 'Feminino',
    ],
    [
        'id' => 15,
        'nome' => 'Marcos Antunes',
        'email' => 'marcos.antunes@email.com',
        'senha' => 'hash_da_senha',
        'telefone' => '(11) 99999-0015',
        'data_nascimento' => '1984-03-18',
        'cpf' => '123.456.789-15',
        'genero' => 'Masculino',
    ]
];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php require_once './../components/head.php' ?>

<body>
    <?php require_once './../components/navbar.php'; ?>
    <?php require_once './../components/sidebar.php'; ?>

    <main>
        <h1>Usuários</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Telefone</th>
                    <th>Data Nascimento</th>
                    <th>CPF</th>
                    <th>Gênero</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario['id'] ?></td>
                        <td><?php echo $usuario['nome'] ?></td>
                        <td><?php echo $usuario['email'] ?></td>
                        <td><?php echo $usuario['senha'] ?></td>
                        <td><?php echo $usuario['telefone'] ?></td>
                        <td><?php echo $usuario['data_nascimento'] ?></td>
                        <td><?php echo $usuario['cpf'] ?></td>
                        <td><?php echo $usuario['genero'] ?></td>
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