<?php
require_once(__DIR__."/../model/personagem.php");
require_once(__DIR__."/../model/Conexao.php");
class PersonagemDAO
{
    private PDO $conexao;
    public function __construct()
    {
        $this->conexao = Conexao::conectar();
    }
    public function inserir(Personagem $obj): bool
    {
      try{
        $sql = "insert into personagem (nome,fisico,mental,genero,vigor,mana,id_conjunto,id_poder,id_raca) values(?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1,$obj->getNome());
		$stmt->bindValue(2,$obj->getFisico());
		$stmt->bindValue(3,$obj->getMental());
		$stmt->bindValue(4,$obj->getGenero());
		$stmt->bindValue(5,$obj->getVigor());
		$stmt->bindValue(6,$obj->getMana());
		$stmt->bindValue(7,$obj->getId_conjunto());
		$stmt->bindValue(8,$obj->getId_poder());
		$stmt->bindValue(9,$obj->getId_raca());
		
        $stmt->execute();
        return true;
        }catch (PDOException $e){
           echo $e->getMessage();
           return false;
        }
        
    }
    public function alterar(Personagem $objeto, int $id): bool
    {
        try{
            $sql = "UPDATE personagem
            SET 
nome = :nome,
fisico = :fisico,
mental = :mental,
genero = :genero,
vigor = :vigor,
mana = :mana,
id_conjunto = :id_conjunto,
id_poder = :id_poder,
id_raca = :id_raca
            WHERE id_personagem = :id";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue("nome", $objeto->getNome());
		$stmt->bindValue("fisico", $objeto->getFisico());
		$stmt->bindValue("mental", $objeto->getMental());
		$stmt->bindValue("genero", $objeto->getGenero());
		$stmt->bindValue("vigor", $objeto->getVigor());
		$stmt->bindValue("mana", $objeto->getMana());
		$stmt->bindValue("id_conjunto", $objeto->getId_conjunto());
		$stmt->bindValue("id_poder", $objeto->getId_poder());
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
        $sql = "DELETE FROM personagem WHERE id_personagem = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        header("Location: ../view/lista_personagem.php");
        exit();
    }
    public function buscarPorId(int $id): ?Personagem
    {
        $sql = "SELECT * FROM personagem WHERE id_personagem = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchObject("Personagem");
    }
    public function listar(): array
    {
        $sql="select * from personagem";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
        
    }
    private function montarObjeto(array $dados): Personagem
    {
        // Implementar
    }
}
?>