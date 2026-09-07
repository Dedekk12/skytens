<?php
require_once(__DIR__ . "/../../controller/PersonagemController.php");
require_once(__DIR__ . "/../../controller/ConjuntoController.php");
require_once(__DIR__ . "/../../controller/PoderController.php");
require_once(__DIR__ . "/../../controller/RacaController.php");
include(__DIR__ . "/../include/header.php");
include(__DIR__ . "/../include/menu.php");

$personagem = "";
$conjunto = "";
$poder = "";
$raca = "";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $personagemCont = new PersonagemController();
    $racaCont = new RacaController();
    $conjuntoCont = new ConjuntoController();
    $poderCont = new PoderController();
    $personagem = $personagemCont->buscarPorId($id);
    $conjunto = $conjuntoCont->buscarPorId($personagem->getConjunto()->getIdConjunto());
    $raca = $racaCont->buscarPorId($personagem->getRaca()->getIdRaca());
    $poder = $poderCont->buscarPorId($personagem->getPoder()->getIdPoder());
} else {
    print "<p>Erro ao buscar o id!!</p>";
}

?>

<div class="container-fluid mt-4 mb-4">

    <div class="card w-100 d-flex flex-column text-center align-self-center rounded-4 bg-transparent">
        <img src="<?= $personagem->getImagem() ?>" class="card-img-top mx-auto d-block" alt="..." style="height: 250px; width: 250px; object-fit: contain;">
        <div class="card-body mb-3 bg-transparent">
            <h5 class="card-title"><?= $personagem->getNome() ?></h5>
            <p class="card-text"><?= $raca->getNome() ?></p>
        </div>
        <ul class="list-group list-group-flush bg-transparent">
            <li class="list-group-item">Habilidade de raça: <?= $raca->getHabilidade() ?></li>
            <li class="list-group-item">Bônus de raça: <?= $raca->getBonusInicial() ?></li>
        </ul>

        <div class="card-body">
            <p class="card-text"><strong>Conjunto: <?= $conjunto->getNome() ?></strong></p>
        </div>
        <ul class="list-group list-group-flush bg-transparent">
            <li class="list-group-item">Armadura: <?= $conjunto->getArmadura() ?></li>
            <li class="list-group-item">Arma: <?= $conjunto->getArma() ?></li>
            <li class="list-group-item">Poção: <?= $conjunto->getPocao() ?></li>
        </ul>

        <div class="card-body">
            <p class="card-text"><strong>Poder: <?= $poder->getNome() ?></strong></p>
        </div>
        <ul class="list-group list-group-flush bg-transparent">
            <li class="list-group-item">Descrição: <?= $poder->getDescricao() ?></li>
            <li class="list-group-item">Custo: <?= $poder->getCusto() ?></li>
            <li class="list-group-item">Tempo de Espera: <?= $poder->getTempoEspera() ?></li>
            <li class="list-group-item">Duração: <?= $poder->getDuracao() ?></li>
        </ul>
    </div>
</div>

<?php
include(__DIR__ . "/../include/footer.php");
?>