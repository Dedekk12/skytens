<?php
require_once(__DIR__ . "/../model/Personagem.php");


class PersonagemService
{
    
    //Métodos
    public static function validar(Personagem $perso) : array
    {
        $erros = [];

        if (!$perso->getNome()) {
            array_push($erros,"Informe o nome!!");
        }

        if (!$perso->getFisico()) {
            array_push($erros,"Informe seu físico!!");
        }

        if ($perso->getFisico() < 0) {
            array_push($erros,"O físico não pode ser um valor negativo!!!");
        }

        if (!$perso->getMental()) {
            array_push($erros,"Informe seu mental!!");
        }

                if ($perso->getMental() < 0) {
            array_push($erros,"O mental não pode ser um valor negativo!!!");
        }

        if (!$perso->getGenero()) {
            array_push($erros,"Informe seu genero!!");
        }

        if(!$perso->getImagem()){
            array_push($erros, "Informe um link de imagem!!");
        }

        if (!$perso->getConjunto()->getIdConjunto()) {
            array_push($erros,"Informe seu conjunto!!");
        }

        if (!$perso->getRaca()->getIdRaca()) {
            array_push($erros,"Informe seu Raca!!");
        }

        if (!$perso->getPoder()->getIdPoder()) {
            array_push($erros,"Informe seu Poder!!");
        }

    

        return $erros;
    }

    public static function validarId(int $id)
    {

        $erros = [];
        if (is_numeric($id)) {
            array_push($erros, "Id informado não é um número válido!");
        }

        return $erros;

    }

}

?>