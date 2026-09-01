<?php
require_once(__DIR__."/../model/poder.php");
require_once(__DIR__."/../model/Conexao.php");
class PoderDAO
{
    private PDO $conexao;
    public function __construct()
    {
        $this->conexao = Conexao::conectar();
    }
    public function inserir(Poder $obj): bool
    {
      try{
        $sql = "insert into poder (nome_poder,custo,tempo_espera,descricao,duracao,id_raca) values(?,?,?,?,?,?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$obj->getNome_poder());
		$stmt->bindValue(2,$obj->getCusto());
		$stmt->bindValue(3,$obj->getTempo_espera());
		$stmt->bindValue(4,$obj->getDescricao());
		$stmt->bindValue(5,$obj->getDuracao());
		$stmt->bindValue(6,$obj->getId_raca());
		
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
duracao = :duracao,
id_raca = :id_raca
            WHERE id_poder = :id";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue("nome_poder", $objeto->getNome_poder());
		$stmt->bindValue("custo", $objeto->getCusto());
		$stmt->bindValue("tempo_espera", $objeto->getTempo_espera());
		$stmt->bindValue("descricao", $objeto->getDescricao());
		$stmt->bindValue("duracao", $objeto->getDuracao());
		$stmt->bindValue("id_raca", $objeto->getId_raca());
		
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
    public function listar(): array
    {
        $sql="select * from poder";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        
    }
    private function montarObjeto(array $dados): Poder
    {
        // Implementar
    }
}
?>