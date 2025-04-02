<?php

require_once './../../model/UsuarioModel.php';


if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $usuarioModel = new UsuarioModel();

     if (empty($_POST['id'])){
        // Fluxo para Criar

        $sucesso = $usuarioModel->cadastrar([
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'telefone' => $_POST['telefone'],
            'data_nascimento' => $_POST['data_nascimento'],
            'cpf' => $_POST['cpf'],

        ]);
    } else {
        // Fluxo para Editar 
        
        $sucesso = $usuarioModel->editar([
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'telefone' => $_POST['telefone'],
            'data_nascimento' => $_POST['data_nascimento'],
            'cpf' => $_POST['cpf'],
        ]);
    }

    if (!$sucesso){
        return "ERRO";
    }
}

return header("Location: usuarios.php");
