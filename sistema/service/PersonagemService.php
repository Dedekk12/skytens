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

        if (!$perso->getMental()) {
            array_push($erros,"Informe seu mental!!");
        }

        if (!$perso->getVigor()) {
            array_push($erros,"Informe seu vigor!!");
        }

        if (!$perso->getMana()) {
            array_push($erros,"Informe seu mana!!");
        }


        if (!$perso->getGenero()) {
            array_push($erros,"Informe seu genero!!");
        }

        if (!$perso->getConjunto()) {
            array_push($erros,"Informe seu conjunto!!");
        }

        if (!$perso->getRaca()) {
            array_push($erros,"Informe seu Raca!!");
        }

        if (!$perso->getPoder()) {
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