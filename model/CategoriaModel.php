<?php

require_once __DIR__ . "/../config/Database.php";

class  CategoriaModel {

    private $conn;
    private $tabela = "categorias";

    public $id;
    public $nome;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function listar() {
        $query = "SELECT * FROM $this->tabela";
        
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }
   
    public function buscarPorId($id){
        $query = "SELECT * FROM $this->tabela WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id",$id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function excluir($id) {
        $query = "DELETE FROM $this->tabela WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
        
    }

    public function cadastrar($categoria){
        $query = "INSERT INTO $this->tabela (nome) VALUES (:nome)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $categoria["nome"]);
        return $stmt->execute();

    }

    public function editar($categoria){

        $query = "UPDATE $this->tabela SET nome=:nome WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $categoria["id"]);
        $stmt->bindParam(':nome', $categoria["nome"]);
        return $stmt->execute();
    }

}