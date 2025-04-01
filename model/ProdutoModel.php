<?php 

require_once __DIR__ . "/../config/Database.php";

class ProdutoModel {

    private $conn;
    private $tabela = "produtos";
    private $tabelaFK = "categorias";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }
    public function listar() {
        $query = "SELECT $this->tabela.id, $this->tabela.nome, $this->tabela.descricao, $this->tabela.preco, $this->tabela.nome FROM $this->tabela INNER JOIN $this->tabelaFK ON $this->tabela.id_categoria = $this->tabelaFK.id";
        
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
}