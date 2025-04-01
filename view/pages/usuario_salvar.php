<?php

require_once './../../model/UsuarioModel.php';

$usuarioModel = new UsuarioModel();

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if (!empty($_POST['id'])){
        // Fluxo para Editar

        $usuarioModel->editar($_POST['id'],$_POST['nome'],$_POST['email'],$_POST['telefone'],$_POST['data_nascimento'],$_POST['cpf']);

    } else {
        // Fluxo para Cadastro 
       
        $usuarioModel->cadastrar($_POST['nome'],$_POST['email'],$_POST['telefone'],$_POST['data_nascimento'],$_POST['cpf']);
    }
}

return header("Location: usuarios.php");