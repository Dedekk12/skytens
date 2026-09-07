<?php
require_once(__DIR__.'/../model/Poder.php');
require_once(__DIR__.'/../dao/PoderDao.php');
 class PoderController 
{
    //Atributos
    private Poder $obj;
    private PoderDao $dao;

    //Métodos
    public function __construct() {
       $this->obj=new Poder();
       $this->dao=new PoderDAO();
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
