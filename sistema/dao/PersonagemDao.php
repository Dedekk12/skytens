<?php
require_once(__DIR__ . "/../model/Personagem.php");
require_once(__DIR__ . "/../model/Conjunto.php");
require_once(__DIR__ . "/../model/Poder.php");
require_once(__DIR__ . "/../model/Raca.php");
require_once(__DIR__ . "/../util/Connection.php");
class PersonagemDAO
{
    private PDO $conexao;


    public function __construct()
    {
        $this->conexao = Connection::getConnection();
    }


    public function inserir(Personagem $obj)
    {
        try {
            $sql = "insert into personagem (nome,fisico,mental,genero,id_conjunto,id_poder,id_raca) values(?,?,?,?,?,?,?)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $obj->getNome());
            $stmt->bindValue(2, $obj->getFisico());
            $stmt->bindValue(3, $obj->getMental());
            $stmt->bindValue(4, $obj->getGenero());
            $stmt->bindValue(7, $obj->getConjunto()->getIdConjunto());
            $stmt->bindValue(8, $obj->getPoder()->getIdPoder());
            $stmt->bindValue(9, $obj->getRaca()->getIdRaca());

            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    //Revisão necessária
    public function alterar(Personagem $objeto, int $id)
    {
        try {
            $sql = "UPDATE personagem
            SET 
            nome = :nome,
            fisico = :fisico,
            mental = :mental,
            genero = :genero,
            id_conjunto = :id_conjunto,
            id_poder = :id_poder,
            id_raca = :id_raca
            WHERE id_personagem = :id";

            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue("nome", $objeto->getNome());
            $stmt->bindValue("fisico", $objeto->getFisico());
            $stmt->bindValue("mental", $objeto->getMental());
            $stmt->bindValue("genero", $objeto->getGenero());
            $stmt->bindValue("id_conjunto", $objeto->getConjunto()->getIdConjunto());
            $stmt->bindValue("id_poder", $objeto->getPoder()->getIdPoder());
            $stmt->bindValue("id_raca", $objeto->getRaca()->getIdRaca());
            $stmt->bindValue(":id", $id);
            
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    //Revisão necessária
    public function excluir(int $id)
    {   
        try{
            $sql = "DELETE FROM personagem WHERE id_personagem = :id";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        }catch(PDOException $e){
            $erro = "Erro ao excluir registro.";
            if(AMB_DEV)
                print $e->getMessage();
            return $erro;
        }
        
    }

    //Revisão necessária
    public function buscarPorId(int $id): ?Personagem
    {
        $sql = "SELECT * FROM personagem WHERE id_personagem = :id";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, Personagem::class);
        return $stmt->fetch();
    }

    //Alterado 
    public function list()
    {
        $sql = "SELECT p.id_personagem,
        p.nome,
        p.fisico,
        p.mental,
        p.genero,
        c.nome_conjunto,
        pw.nome_poder,
        r.nome_raca
        FROM `personagem` as p 
        JOIN `conjunto` as c 
            ON p.id_conjunto = c.id_conjunto 
        JOIN `poder` as pw 
            ON p.id_poder = pw.id_poder 
        JOIN `raca` as r 
            ON p.id_raca = r.id_raca";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        $dados = $stmt->fetchAll();
        //print_r($dados);
        $objetos = $this->map($dados);
        return $objetos;
    }

    public function searchById(int $id)
    {
        $sql = "SELECT * FROM `personagem` WHERE `personagem`.id_personagem = :id";
        $stm = $this->conexao->prepare($sql);
        $stm->bindValue(":id", $id);
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_CLASS, Personagem::class);
        
        return $stm->fetch();
    }

    private function map(array $dados) : array
    {
        $objetos = [];
        foreach ($dados as $d) {
            $obj = new Personagem();
            $obj->setIdPersonagem($d["id_personagem"]);
            $obj->setNome($d["nome"]);
            $obj->setFisico($d["fisico"]);
            $obj->setMental($d["mental"]);
            $obj->setGenero($d["genero"]);
            $conj = new Conjunto();
            $conj->setNomeConjunto($d["nome_conjunto"]);
            $obj->setConjunto($conj);

            $raca = new Raca();
            $raca->setNomeRaca($d["nome_raca"]);
            $obj->setRaca($raca);
            

            $poder = new Poder();
            $poder->setNomePoder($d["nome_poder"]);
            $obj->setPoder($poder);

            array_push($objetos,$obj);
        }

        return $objetos;
    }

}
