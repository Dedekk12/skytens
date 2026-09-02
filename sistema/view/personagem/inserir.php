<?php
//Requisitos
require_once(__DIR__ . "/../../model/Personagem.php");
require_once(__DIR__ . "/../../model/Conjunto.php");
require_once(__DIR__ . "/../../model/Poder.php");
require_once(__DIR__ . "/../../model/Raca.php");

require_once(__DIR__ . "/../../controller/PersonagemController.php");
require_once(__DIR__ . "/../../controller/ConjuntoController.php");
require_once(__DIR__ . "/../../controller/PoderController.php");
require_once(__DIR__ . "/../../controller/RacaController.php");


//Codigo

$personagem = null;
$msgErro = "";

//Form values
if (isset($_POST["nome"])) {
    //1-Captura de dados
    $nome =  trim($_POST["nome"]) ? trim($_POST["nome"]) : null;
    $poderValue= is_numeric($_POST['poder']) ? $_POST['poder'] : null;
    $racaValue= is_numeric($_POST['raca']) ? $_POST['raca'] : null;
    $conjValue = is_numeric($_POST['conjunto']) ? $_POST['conjunto'] : null;
    $genero= trim($_POST['genero']) ? trim($_POST['genero']) : null;
    $fisico= is_numeric($_POST['fisico']) ? $_POST['fisico'] : null;
    $mental= is_numeric($_POST['mental']) ? $_POST['mental'] : null;



    // print_r($_POST);

    //2-Criar objeto
    $personagem = new Personagem();
    $personagem->setIdPersonagem(0);
    $personagem->setNome($nome);
    $personagem->setGenero($genero);
    $personagem->setFisico($fisico);
    $personagem->setMental($mental);
    

    $conj = new Conjunto();
    $conj->setIdConjunto($conjValue);
    $poder = new Poder();
    $poder->setIdPoder($poderValue);
    $raca = new Raca();
    $raca->setIdRaca($racaValue);

    $personagem->setConjunto($conj);
    $personagem->setPoder($poder);
    $personagem->setRaca($raca);

    $personagemControl = new PersonagemController();

    

    //3-Validação de dados
    //4- Persistir o Objeto

    $erros =  $personagemControl->inserir($personagem);
    

    if (!empty($erros)) {
        $msgErro = implode("<br>", $erros);
    } else {
        header("location: listar.php");
    }

}



include_once(__DIR__ . "/form.php");
