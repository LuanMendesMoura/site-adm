<?php

require_once './../../model/ProdutoModel.php';

$produtoModel = new ProdutoModel();

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if (isset($POST['id'])){
        // Fluxo para Editar

        $produtoModel->editar($_POST['id'],$_POST['nome'],$_POST['descricao'],$_POST['id_categoria'],$_POST['preco']);
        echo "edicao";

    } else {
        // Fluxo para Cadastro 
       
        $produtoModel->cadastrar($_POST['nome'],$_POST['descricao'],$_POST['id_categoria'],$_POST['preco']);
        echo "cadastro";
    }
}

// return header("Location: produtos.php");