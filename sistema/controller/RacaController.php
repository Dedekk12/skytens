<?php
require_once(__DIR__ . '/../model/Raca.php');
require_once(__DIR__ . '/../dao/RacaDao.php');

class RacaController
{
    //Atributos
    private Raca $obj;
    private RacaDao $dao;

    //Métodos
    public function __construct()
    {
        $this->obj = new Raca();
        $this->dao = new RacaDAO();
    }

    //Implementar...
    public function inserir() {}
    public function alterar() {}
    public function deletar() {}
    public function listar()
    {
        $dados = $this->dao->list();
        return $dados;
    }

    public function buscarPorId(int $id)
    {
        $dados = $this->dao->searchById($id);
        return $dados;
    }
}
