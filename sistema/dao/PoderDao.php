<?php
require_once(__DIR__."/../model/Poder.php");
require_once(__DIR__."/../util/Connection.php");
class PoderDAO
{
    private PDO $conexao;
    public function __construct()
    {
        $this->conexao = Connection::getConnection();
    }
    public function inserir(Poder $obj): bool
    {
      try{
        $sql = "insert into poder (nome_poder,custo,tempo_espera,descricao,duracao) values(?,?,?,?,?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$obj->getNome());
		$stmt->bindValue(2,$obj->getCusto());
		$stmt->bindValue(3,$obj->getTempoEspera());
		$stmt->bindValue(4,$obj->getDescricao());
		$stmt->bindValue(5,$obj->getDuracao());
		//$stmt->bindValue(6,$obj->getId_raca());
		
        $stmt->execute();
        return true;
        }catch (PDOException $e){
           echo $e->getMessage();
           return false;
        }
        
    }
    public function alterar(Poder $objeto, int $id): bool
    {
        try{
            $sql = "UPDATE poder
            SET 
nome_poder = :nome_poder,
custo = :custo,
tempo_espera = :tempo_espera,
descricao = :descricao,
duracao = :duracao
            WHERE id_poder = :id";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue("nome_poder", $objeto->getNome());
		$stmt->bindValue("custo", $objeto->getCusto());
		$stmt->bindValue("tempo_espera", $objeto->getTempoEspera());
		$stmt->bindValue("descricao", $objeto->getDescricao());
		$stmt->bindValue("duracao", $objeto->getDuracao());;
		
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
    public function excluir(int $id): bool
    {
        $sql = "DELETE FROM poder WHERE id_poder = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        header("Location: ../view/lista_poder.php");
        exit();
    }
    public function buscarPorId(int $id): ?Poder
    {
        $sql = "SELECT * FROM poder WHERE id_poder = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchObject("Poder");
    }
    public function list(): array
    {
        $sql="select * from poder";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Poder::class);
        return $stmt->fetchAll();
        
    }

        public function searchById(int $id)
    {
        $sql = "SELECT * FROM `poder` WHERE `poder`.id_poder = :id";
        $stm = $this->conexao->prepare($sql);
        $stm->bindValue(":id", $id);
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_CLASS, Poder::class);
        
        return $stm->fetch();
    }

}
?>
