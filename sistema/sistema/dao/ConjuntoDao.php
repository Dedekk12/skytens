<?php
require_once(__DIR__ . "/../model/Conjunto.php");
require_once(__DIR__ . "/../util/Connection.php");
class ConjuntoDAO
{
    private PDO $conexao;
    public function __construct()
    {
        $this->conexao = Connection::getConnection();
    }
    public function inserir(Conjunto $obj): bool
    {
        try {
            $sql = "insert into conjunto (nome_conjunto,armadura,arma,pocao) values(?,?,?,?)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $obj->getNome());
            $stmt->bindValue(2, $obj->getArmadura());
            $stmt->bindValue(3, $obj->getArma());
            $stmt->bindValue(4, $obj->getPocao());

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function alterar(Conjunto $objeto, int $id): bool
    {
        try {
            $sql = "UPDATE conjunto
            SET 
nome_conjunto = :nome_conjunto,
armadura = :armadura,
arma = :arma,
pocao = :pocao
            WHERE id_conjunto = :id";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue("nome_conjunto", $objeto->getNome());
            $stmt->bindValue("armadura", $objeto->getArmadura());
            $stmt->bindValue("arma", $objeto->getArma());
            $stmt->bindValue("pocao", $objeto->getPocao());

            $stmt->bindValue(":id", $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function excluir(int $id)
    {
        $sql = "DELETE FROM conjunto WHERE id_conjunto = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        header("Location: ../view/lista_conjunto.php");
        exit();
    }
    public function buscarPorId(int $id): ?Conjunto
    {
        $sql = "SELECT * FROM conjunto WHERE id_conjunto = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchObject("Conjunto");
    }
    public function list(): array
    {
        $sql = "select * from conjunto";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS,Conjunto::class);
        return $stmt->fetchAll();
    }

            public function searchById(int $id)
    {
        $sql = "SELECT * FROM `conjunto` WHERE `conjunto`.id_conjunto = :id";
        $stm = $this->conexao->prepare($sql);
        $stm->bindValue(":id", $id);
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_CLASS, conjunto::class);
        
        return $stm->fetch();
    }
}
