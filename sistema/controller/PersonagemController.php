<?php
require_once(__DIR__.'/../model/Personagem.php');
require_once(__DIR__.'/../dao/PersonagemDao.php');

class PersonagemController 
{
    //Atributos
    private Personagem $obj;
    private PersonagemDao $dao;

    //Métodos
    public function __construct() {
       $this->obj=new Personagem();
       $this->dao=new PersonagemDAO();
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
