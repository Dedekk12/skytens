
<nav class="navbar navbar-expand-lg bg-body-tertiary rounded p-2">

    <a class="navbar-brand" href="<?= BASE_URL ?>index.php">Skytems</a>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navSite">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="<?= BASE_URL ?>index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle"
                    id="navDropDown" data-bs-toggle="dropdown">Personagens</a>
                <div class="dropdown-menu">
                    <a href="<?= BASE_URL ?>view/personagem/listar.php" class="dropdown-item">Listagem</a>
                    <a href="<?= BASE_URL ?>view/personagem/inserir.php" class="dropdown-item">Cadastro</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Sobre</a>
            </li>
        </ul>
    </div>


</nav>





