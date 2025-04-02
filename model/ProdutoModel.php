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
        // $query = "SELECT * FROM $this->tabela";
        $query = "SELECT p.*, c.nome as categoria_nome FROM $this->tabela p INNER JOIN $this->tabelaFK c ON p.id_categoria = c.id; ";
        
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

    public function cadastrar($produto) {
        $query = "INSERT INTO $this->tabela (nome, descricao, id_categoria, preco) VALUES (:nome, :descricao, :id_categoria, :preco)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $produto["nome"]);
        $stmt->bindParam(':descricao', $produto["descricao"]);
        $stmt->bindParam(':id_categoria', $produto["id_categoria"]);
        $stmt->bindParam(':preco', $produto["preco"]);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function editar($produto) {
        $query = "UPDATE $this->tabela SET nome=:nome, descricao=:descricao, id_categoria=:id_categoria, preco=:preco WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $produto["id"]);
        $stmt->bindParam(':nome', $produto["nome"]);
        $stmt->bindParam(':descricao', $produto["descricao"]);
        $stmt->bindParam(':id_categoria', $produto["id_categoria"]);
        $stmt->bindParam(':preco', $produto["preco"]);
        return $stmt->execute();
    }
}