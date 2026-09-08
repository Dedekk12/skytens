<?php
require_once(__DIR__ . "/util/Connection.php");
require_once(__DIR__ . "/util/Config.php");
require_once(__DIR__ . "/controller/PersonagemController.php");

$conn = Connection::getConnection();

$personagemCont = new PersonagemController();
$personagens = $personagemCont->listar();


include(__DIR__ . "/view/include/header.php");
include(__DIR__ . "/view/include/menu.php");
?>




<div class="d-flex justify-content-center" id="conteudo-inicial">


    <div id="carouselExampleAutoplaying" class="carousel carousel slide h-100 w-50" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active" data-bs-interval="10000">
                <div class="card p-5 justify-content-center bg-transparent  text-white" style="height: 90vh;" >
                    <!-- Imagem ajustada sem cortes -->
                    <div class="text-center p-2">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMoej3NzZ6m6IJ10M6HzknYDWjBqzzjIUEB6vbZrMfD-all73tKxItqPop&s=10" class="irounded mg-fluid w-75" style="max-height: 700px; width: auto;" alt="Insira um personagem para ver mais :D">
                    </div>

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Personagens</h5>
                        <p class="card-text">Insira personagens e veja neste Carrosel :D</p>
                        <a href="<?php BASE_URL ?>view/personagem/inserir.php" class="btn btn-primary mt-auto">Ver Mais</a>
                    </div>

                </div>
            </div>


            <?php foreach ($personagens as $personagem): ?>
                <div class="carousel-item  w-100" data-bs-interval="20000">
                    <div class="card p-5 justify-content-center bg-transparent text-white" style="height: 90vh;">
                        <!-- Imagem ajustada sem cortes -->
                        <div class="text-center p-2">
                            <img src="<?= $personagem->getImagem() ?>" class="rounded img-fluid w-75" style="max-height: 700px;" alt="<?= $personagem->getNome() ?>">
                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?= $personagem->getNome() ?></h5>
                            <p class="card-text"><?= $personagem->getRaca()->getNome() ?></p>
                            <a href="<?= BASE_URL ?>view/personagem/card.php?id=<?= $personagem->getIdPersonagem() ?>" class="btn btn-primary mt-auto">Ver Mais</a>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>

        <button class="carousel-control-prev btn-light" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next btn-light" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


</div>

<?php
include(__DIR__ . "/view/include/footer.php");
?>