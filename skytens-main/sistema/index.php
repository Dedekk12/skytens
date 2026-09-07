<?php
require_once(__DIR__ . "/util/Connection.php");
require_once(__DIR__ . "/util/config.php");
require_once(__DIR__ . "/controller/PersonagemController.php");


include(__DIR__ . "/view/include/header.php");
include(__DIR__ . "/view/include/menu.php");

$conn = Connection::getConnection();

$personagemCont = new PersonagemController();
$personagens = $personagemCont->listar();
?>

<div class="d-flex flex-row flex-wrap gap-3">
    <?php foreach ($personagens as $personagem): ?>
        <div class="card" style="width: 18rem;">
            <!-- Imagem ajustada sem cortes -->
            <div class="text-center p-2">
                <img src="<?= $personagem->getImagem() ?>" class="img-fluid" style="max-height: 200px; width: auto;" alt="<?= $personagem->getNome() ?>">
            </div>
            
            <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?= $personagem->getNome() ?></h5>
                <p class="card-text"><?= $personagem->getRaca()->getNome() ?></p>
                <a href="<?= BASE_URL ?>/view/personagem/card.php?id=<?= $personagem->getIdPersonagem() ?>" class="btn btn-primary mt-auto">Ver Mais</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
include(__DIR__ . "/view/include/footer.php");
?>