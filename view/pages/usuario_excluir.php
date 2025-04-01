<?php

require_once './../../model/UsuarioModel.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = ["id"];

    if (!empty($id)) {
        $usuarioModel = new UsuarioModel();
        $usuarioModel->excluir($_POST['id']);
    }
}

return header("Location: usuarios.php");
