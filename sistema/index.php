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
    <div id="carouselExampleAutoplaying" class="carousel slide h-50 w-50" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- Item Padrão (Estático) -->
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="card p-4 bg-transparent text-white d-flex flex-column" style="height: 80vh;">
                    
                    <!-- Container flexível para a imagem não estourar a altura -->
                    <div class="d-flex align-items-center justify-content-center flex-grow-1 overflow-hidden p-2" style="min-height: 0;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMoej3NzZ6m6IJ10M6HzknYDWjBqzzjIUEB6vbZrMfD-all73tKxItqPop&s=10" 
                             class="rounded img-fluid" 
                             style="max-height: 100%; max-width: 100%; object-fit: contain;" 
                             alt="Insira um personagem para ver mais :D">
                    </div>

                    <!-- Conteúdo com altura fixa/garantida para o botão -->
                    <div class="card-body d-flex flex-column flex-grow-0 pt-2 pb-0">
                        <h5 class="card-title">Personagens</h5>
                        <p class="card-text mb-3">Insira personagens e veja neste Carrosel :D</p>
                        <a href="<?= BASE_URL ?>view/personagem/inserir.php" class="btn btn-primary w-100">Ver Mais</a>
                    </div>

                </div>
            </div>

            <!-- Loop dos Personagens -->
            <?php foreach ($personagens as $personagem): ?>
                <div class="carousel-item w-100" data-bs-interval="20000">
                    <div class="card p-4 bg-transparent text-white d-flex flex-column" style="height: 80vh;">
                        
                        <!-- Container flexível para a imagem -->
                        <div class="d-flex align-items-center justify-content-center flex-grow-1 overflow-hidden p-2" style="min-height: 0;">
                            <img src="<?= $personagem->getImagem() ?>" 
                                 class="rounded img-fluid" 
                                 style="max-height: 100%; max-width: 100%; object-fit: contain;" 
                                 alt="<?= $personagem->getNome() ?>">
                        </div>

                        <!-- Conteúdo fixo garantindo visibilidade do botão -->
                        <div class="card-body d-flex flex-column flex-grow-0 pt-2 pb-0">
                            <h5 class="card-title"><?= $personagem->getNome() ?></h5>
                            <p class="card-text mb-3"><?= $personagem->getRaca()->getNome() ?></p>
                            <a href="<?= BASE_URL ?>view/personagem/card.php?id=<?= $personagem->getIdPersonagem() ?>" class="btn btn-primary w-100">Ver Mais</a>
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
