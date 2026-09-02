<?php
require_once(__DIR__ . "/../../util/Connection.php");
require_once(__DIR__ . "/../../controller/PersonagemController.php");

$conn = Connection::getConnection();

//Buscar Alunos
$personagemCont = new PersonagemController();
$personagens = $personagemCont->listar();


//Inclui cabeçalho
include(__DIR__ . "/../include/header.php");
//include(__DIR__ . "/../include/menu.php");
?>


<div class="mt-3">
    <h3>Listagem de Alunos</h3>
</div>


<table class="table table-secondary table-striped">
    <tr>
        <th>Nome</th>
        <th>Raca</th>
        <th>Genero</th>
        <th>Fisico</th>
        <th>Mental</th>
        <th>Vigor</th>
        <th>Mana</th>
        <th>Conjunto</th>
        <th>Poder</th>
        <th></th>
        <th></th>
        
    </tr>

    <?php foreach ($personagens as $p): ?>
    <tr>
        <td><?= $p->getNome() ?></td>
        <td><?= $p->getRaca()->getNome() ?></td>
        <td><?= $p->getGenero() ?></td>
        <td><?= $p->getFisico() ?></td>
        <td><?= $p->getMental() ?></td>
        <td><?= $p->getVigor() ?></td>
        <td><?= $p->getMana() ?></td>
        <td><?= $p->getConjunto()->getNome() ?></td>
        <td><?= $p->getPoder()->getNome() ?></td>
        <td><a href="<?= BASE_URL ?>view/personagem/alterar.php?id=<?= $p->getIdPersonagem() ?>">Alterar</a></td>
        <td><a href="<?= BASE_URL ?>view/personagem/excluir.php?id=<?= $p->getIdPersonagem() ?>" onclick="return confirm('Confirmar a Exclusão?')">Excluir</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<div class="mt-3">
         <a href="inserir.php" class="btn btn-outline-secondary">Inserir Dados</a>
</div>



<?php
//Inclui rodapé
include(__DIR__ . "/../include/footer.php");
?>