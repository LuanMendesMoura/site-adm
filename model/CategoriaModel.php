<?php

require_once __DIR__ . "/../config/Database.php";

class  CategoriaModel {

    private $conn;
    private $tabela = "categorias";

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
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function cadastrar($nome){
        $query = "INSERT INTO $this->tabela (nome) VALUES (:nome)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome",$nome);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function editar($id, $nome){

        $query = "UPDATE $this->tabela SET nome=:nome WHERE id=:id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();

        return $stmt->rowCount() > 0;        
    }

}