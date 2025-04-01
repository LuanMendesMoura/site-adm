<?php

require_once './../../model/CategoriaModel.php';

$categoriaModel = new CategoriaModel();

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = ["id"];

    if(!empty($id)) {
        // Fluxo para Editar

        $nome = ["nome"];

        $categoriaModel->editar($id, $nome);

    } else {
        // Fluxo para Cadastro 

        $nome = $_POST["nome"];
       
        $categoriaModel->cadastrar($nome);
    }
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM</title>
    
    <link rel="stylesheet" href="/catalogo-CategoriaModels/public/css/style.css">
 
</head>
<body>
    <section class="cadastro-container">
        <form action="cadastro.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $CategoriaModel->id ?>">

            <div class="cadastro-label-input">
                <label for="nome">Nome</label>
                <input type="text" name="nome" value="<?php echo $CategoriaModel->nome ?>">
            </div>
            <div class="cadastro-label-input">
                <label for="ano">Ano</label>
                <input type="text" name="ano" value="<?php echo $CategoriaModel->ano ?>">
            </div>
            <div class="cadastro-label-input">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" value="<?php echo $CategoriaModel->descricao ?>">
            </div>
            <div class="cadastro-label-input">
                <label for="urlIMG">Url Imagem</label>
                <input type="text" name="urlIMG" value="<?php echo $CategoriaModel->urlIMG ?>">
            </div>
            
            <div class="cadastro-button">
                <button>Salvar</button>
            </div>
        </form>
    </section>
</body>
</html>
 