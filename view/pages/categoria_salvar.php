<?php

require_once './../../model/CategoriaModel.php';


if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $categoriaModel = new CategoriaModel();

     if (empty($_POST['id'])){
        // Fluxo para Criar

        $sucesso = $categoriaModel->cadastrar([
            'nome' => $_POST['nome'],
        ]);
    } else {
        // Fluxo para Editar 
        
        $sucesso = $categoriaModel->editar([
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
        ]);
    }

    if (!$sucesso){
        return "ERRO";
    }
}

return header("Location: categorias.php");