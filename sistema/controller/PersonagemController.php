<?php
require_once(__DIR__.'/../model/Personagem.php');
require_once(__DIR__.'/../dao/PersonagemDao.php');
require_once(__DIR__. '/../service/PersonagemService.php');

class PersonagemController 
{
    //Atributos

    private PersonagemDao $dao;

    //Métodos
    public function __construct() {

       $this->dao=new PersonagemDAO();
   }


   //Implementar...
   public function inserir(Personagem $personagem){
    
    $erros = PersonagemService::validar($personagem);

    if (empty($erros)) {
        $erroDao = $this->dao->inserir($personagem);
        if ($erroDao) {
            array_push($erros,$erroDao);
        }
    }else
    {
        return $erros;
    }

   }
   public function alterar(){
    
   }
   public function deletar($id){
    $erros = $this->dao->excluir($id);
    return $erros;
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
