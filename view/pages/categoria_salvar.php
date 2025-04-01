<?php

require_once './../../model/CategoriaModel.php';

$categoriaModel = new CategoriaModel();

if($_SERVER["REQUEST_METHOD"] === "POST"){
     if (!empty($_POST['id'])){
        // Fluxo para Editar

        $categoriaModel->editar($_POST['id'],$_POST['nome']);

    } else {
        // Fluxo para Cadastro 
       
        $categoriaModel->cadastrar($_POST['nome']);
    }
}

return header("Location: categorias.php");