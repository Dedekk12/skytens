<?php
require_once(__DIR__."/../model/raca.php");
require_once(__DIR__."/../model/Conexao.php");
class RacaDAO
{
    private PDO $conexao;
    public function __construct()
    {
        $this->conexao = Conexao::conectar();
    }
    public function inserir(Raca $obj): bool
    {
      try{
        $sql = "insert into raca (nome_raca,habilidade,bonus_incial) values(?,?,?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$obj->getNome_raca());
		$stmt->bindValue(2,$obj->getHabilidade());
		$stmt->bindValue(3,$obj->getBonus_incial());
		
        $stmt->execute();
        return true;
        }catch (PDOException $e){
           echo $e->getMessage();
           return false;
        }
        
    }
    public function alterar(Raca $objeto, int $id): bool
    {
        try{
            $sql = "UPDATE raca
            SET 
nome_raca = :nome_raca,
habilidade = :habilidade,
bonus_incial = :bonus_incial
            WHERE id_raca = :id";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue("nome_raca", $objeto->getNome_raca());
		$stmt->bindValue("habilidade", $objeto->getHabilidade());
		$stmt->bindValue("bonus_incial", $objeto->getBonus_incial());
		
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
        $sql = "DELETE FROM raca WHERE id_raca = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        header("Location: ../view/lista_raca.php");
        exit();
    }
    public function buscarPorId(int $id): ?Raca
    {
        $sql = "SELECT * FROM raca WHERE id_raca = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchObject("Raca");
    }
    public function listar(): array
    {
        $sql="select * from raca";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        
    }
    private function montarObjeto(array $dados): Raca
    {
        // Implementar
    }
}
?>