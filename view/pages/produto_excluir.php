<?php

require_once './../../model/ProdutoModel.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = ["id"];

    if (!empty($id)) {
        $produtoModel = new ProdutoModel();
        $produtoModel->excluir($_POST['id']);
    }
}

return header("Location: produtos.php");
