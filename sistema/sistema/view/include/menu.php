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
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">  
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASE_URL ?>view/personagem/listar.php">Listagem</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
