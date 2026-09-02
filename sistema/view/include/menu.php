<?php
require_once(__DIR__ . "/../../util/Config.php");
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE_URL ?>index.php">Skytems</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">  
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL ?>view/personagem/inserir.php">Criação de Personagem</a>
                </li>
            </ul>
            
            <!-- Right-aligned dropdown menu -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Listas
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="<?= BASE_URL ?>view/personagem/listar.php">Personagens</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Poderes</a></li>
                        <li><a class="dropdown-item" href="#">Conjuntos</a></li>
                        <li><a class="dropdown-item" href="#">Raças</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
