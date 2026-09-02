<?php

require_once(__DIR__ . "/../../controller/PersonagemController.php");
//1 capturar o id
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    //2 excluir pelo controller
    $personagemController = new PersonagemController();
    $erros = $personagemController->deletar($id);
    //print_r($erros);
    //3 redirecionar
    if(!$erros){
        header("location: listar.php");  
        exit();
    }
    else{
        print "Erro ao excluir";
        print '<a href="listar.php">Voltar</a>';
    }
}
else{
    print "Erro ao capturar o id";
    print '<a href="listar.php">Voltar</a>';
}


