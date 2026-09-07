<?php
require_once(__DIR__.'/../model/Conjunto.php');
require_once(__DIR__.'/../dao/ConjuntoDao.php');

class ConjuntoController
{
    //Atributos
    private Conjunto $obj;
    private ConjuntoDao $dao;

    //Métodos
    public function __construct() {
       $this->obj=new Conjunto();
       $this->dao=new ConjuntoDAO();
   }

   //Implementar...
   public function inserir(){
    
   }
   public function alterar(){
    
   }
   public function deletar(){
    
   }
   public function listar(){
    $dados = $this->dao->list();
    return $dados;
   }

    public function buscarPorId(int $id)
   {
    $dados = $this->dao->searchById($id);
    return $dados;
   }
}
