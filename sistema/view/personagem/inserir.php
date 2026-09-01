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

//Form values
if (isset($_POST["nome"])) {
    //1-Captura de dados
    $nome =  trim($_POST["nome"]) ? trim($_POST["nome"]) : null ;
    $idade = is_numeric($_POST["idade"]) ? $_POST["idade"] : null;
    $estrangeiro = trim($_POST["estrangeiro"]) ? trim($_POST["estrangeiro"]) : null;
    $idCurso = is_numeric($_POST["curso"]) ? $_POST["curso"] : null;

    //2-Criar objeto Aluno

    $personagem = new Personagem();

    $curso = new Curso();
    


    //3-Validação de dados

    //4- Persistir o Objeto
    $personagemControl = new PersonagemController;

    $erros =  $personagemControl->inserir($personagem);

    if (!empty($erros)) {
        $msgErro = implode("<br>", $erros);
    }else{
        header("location: listar.php");
    }
   

   /* if (is_array($resultado)) {
        $erros = $resultado;

        echo "<h1> Lista de erros : </h1> \n <ol>";
        foreach ($erros as $erro) {
            echo "\n <li> {$erro} </li>";
        }
        echo "</ol>";

    }elseif (is_bool($resultado) && $resultado == true) {
            echo "<h1> Aluno inserido com sucesso </h1>";
    }
    */

}



include_once(__DIR__ . "/form.php");
?>