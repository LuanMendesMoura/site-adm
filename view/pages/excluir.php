<?php

require_once './../../model/UsuarioModel.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = ["id"];

    if (!empty($id)) {
        $usuarioModel = new UsuarioModel();
        $sucesso = $usuarioModel->excluir($id);
    }
}

return header("Location: usuarios.php");
