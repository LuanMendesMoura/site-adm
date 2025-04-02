<?php

require_once './../../model/ProdutoModel.php';


if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $produtoModel = new ProdutoModel();

     if (empty($_POST['id'])){
        // Fluxo para Criar

        $sucesso = $produtoModel->cadastrar([
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'id_categoria' => $_POST['id_categoria'],
            'preco' => $_POST['preco'],

        ]);
    } else {
        // Fluxo para Editar 
        
        $sucesso = $produtoModel->editar([
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'id_categoria' => $_POST['id_categoria'],
            'preco' => $_POST['preco'],
        ]);
    }

    if (!$sucesso){
        return "ERRO";
    }
}

return header("Location: produtos.php");
