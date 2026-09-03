<?php

require_once(__DIR__ . "/../../model/Personagem.php");
require_once(__DIR__ . "/../../model/Conjunto.php");
require_once(__DIR__ . "/../../model/Poder.php");
require_once(__DIR__ . "/../../model/Raca.php");

require_once(__DIR__ . "/../../controller/PersonagemController.php");
require_once(__DIR__ . "/../../controller/ConjuntoController.php");
require_once(__DIR__ . "/../../controller/PoderController.php");
require_once(__DIR__ . "/../../controller/RacaController.php");

$msgErro = array();
$personagem = null;

$personagemController = new PersonagemController();

if(isset($_POST["nome"])){
    //1-Captura de dados
    $id = $_POST["id"];
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
    $personagem->setIdPersonagem($id);
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

    $erros = $personagemController->alterar($personagem);

    if(!$erros){
        header("location: listar.php");
    }else{
        $msgErro = implode("<br>", $erros);
    }
}else{
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $personagem = $personagemController->buscarPorId($id);
        // print_r($personagem);
        
    }else{
        array_push($msgErro, "Não foi possível capturar o ID");
    }
}

require_once(__DIR__ . "/form.php");
