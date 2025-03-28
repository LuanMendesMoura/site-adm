<?php

require_once __DIR__ . "/../config/Database.php";    
class UsuarioModel {

    private $conn;
    private $tabela = "usuarios";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar() {
        $query = "select * from $this->tabela";
        
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    // public function buscarPorId($id) {
    //     $indexUsuario = -1;

    //     $array_filtrado = array_filter(
    //         $this->usuarios,
    //         function ($usuario, $index) use ($id, &$indexUsuario) {
    //             if ($usuario['id'] == $id) {
    //                 $indexUsuario = $index;
    //                 return $usuario;
    //             }
    //         },
    //         ARRAY_FILTER_USE_BOTH
    //     );

    //     return $array_filtrado[$indexUsuario];
    // }

    // public function excluir($id) {
    //     foreach ($this->usuarios as $index => $usuario) {
    //         if ($usuario['id'] == $id) {
    //             unset($usuarios[$id]);
    //             return true; // Retorna true se a exclusão for bem-sucedida
    //         }
    //     }
    //     return false; // Retorna false se o usuário não for encontrado
    // }
    
}
