<?php
require_once(__DIR__ . "/../../controller/PersonagemController.php");
require_once(__DIR__ . "/../../controller/ConjuntoController.php");
require_once(__DIR__ . "/../../controller/PoderController.php");
require_once(__DIR__ . "/../../controller/RacaController.php");
/*
CRIAR SISTEMA DE LISTAGEM PARA AS CLASSES PODER,RACA,CONJUNTO PARA UTILIZAR DE SELECT
*/


$conjuntoControl = new ConjuntoController();
$conjuntos = $conjuntoControl->listar();

$poderControl = new PoderController();
$poderes = $poderControl->listar();

$racaControl = new RacaController();
$racas = $racaControl->listar();



include(__DIR__ . "/../include/header.php");
//include(__DIR__ . "/../include/menu.php");
?>


<div class="row">
    <div class="mt-3">
        <h3>
            <?= ($personagem && ($personagem->getIdPersonagem() > 0)) ? "Alterar" : "Inserir" ?>
            Personagem</h3>
    </div>
    <div class="col-6">
        <form action="" method="post">
            <div class=" p-1 mb-2 border border-3 border-secondary rounded">

                <div class="">
                    <label for="nome" class="form-label">Nome</label>
                    <input
                        value="<?= ($personagem != null) ? $personagem->getNome() : ''
                                ?>"
                        type="text"
                        name="nome"
                        id="txtNome"
                        placeholder="Informe o nome"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label for="txtFisico" class="form-label">Físico</label>
                    <input
                        value="<?= ($personagem != null) ? $personagem->getFisico() : ''
                                ?>"
                        type="number"
                        name="fisico"
                        id="txtFisico"
                        min="0"
                        step="0.1"
                        placeholder="Informe seu valor Físico"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label for="txtMental" class="form-label">Mental</label>
                    <input
                        value="<?= ($personagem != null) ? $personagem->getMental() : ''
                                ?>"
                        type="number"
                        name="mental"
                        id="txtMental"
                        min="0"
                        step="0.1"
                        placeholder="Informe seu valor Mental"
                        class="form-control">
                </div>

                <div class="mb-3" class="form-floating">
                    <label for="selGenero">Gênero</label>
                    <select name="genero" id="selGenero" class="form-select">
                        <option value="">----Selecione----</option>
                        <option value="M" <?= ($personagem != null) && ($personagem->getGenero() == "M") ? "selected" : ''
                                            ?>>Masculino</option>
                        <option value="F" <?= ($personagem != null) && ($personagem->getGenero() == "F") ? "selected" : ''
                                            ?>>Feminino</option>
                    </select>
                </div>

                <div class="mb-3" class="form-floating">
                    <label for="selConjunto">Conjunto de equipamento inicial</label>
                    <select name="conjunto" id="selConjunto" class="form-select">
                        <!-- Conjuntos criados dinamicamente -->
                        <option>---Selecione---</option>
                        <?php foreach ($conjuntos as $c): ?>
                            <option value="<?= $c->getIdConjunto() ?>"
                                <?php
                                if ($personagem != null && $personagem->getConjunto()->getIdConjunto() == $c->getIdConjunto())
                                    print "selected";
                                ?>>
                                <?= $c->getNome() ?>
                            </option>
                        <?php endforeach;  ?>
                    </select>
                </div>

                <div class="mb-3" class="form-floating">
                    <label for="selPoder">Poder</label>
                    <select name="poder" id="selPoder" class="form-select">
                        <!-- Poderes criados dinamicamente -->
                        <option>---Selecione---</option>
                        <?php foreach ($poderes as $p): ?>
                            <option value="<?= $p->getIdPoder() ?>"
                                <?php
                                if ($personagem != null && $personagem->getPoder()->getIdPoder() == $p->getIdPoder())
                                    print "selected"; ?>>
                                <?= $p->getNome() ?>
                            </option>
                        <?php endforeach;  ?>
                    </select>
                </div>

                <div class="mb-3" class="form-floating">
                    <label for="selRaca">Raça</label>
                    <select name="raca" id="selRaca" class="form-select">
                        <!-- Cursos criados dinamicamente -->
                        <option>---Selecione---</option>
                        <?php foreach ($racas as $r): ?>
                            <option value="<?= $r->getIdRaca() ?>"
                                <?php
                                if ($personagem != null && $personagem->getRaca()->getIdRaca() == $r->getIdRaca())
                                    print "selected";
                                ?>>
                                <?= $r->getNome() ?>
                            </option>
                        <?php endforeach;  ?>
                    </select>
                </div>


                <div class="mb-3">
                    <input type="hidden" name="id" value="<?= $personagem ? $personagem->getIdPersonagem() : 0 ?>"></input>
                </div>


            </div>
            <!--Fechamento de  border -->



            <!-- botões -->
            <div class="row">
                <div class="mb-3 col-2">
                    <button type="submit" class="btn btn-success">Gravar</button>
                </div>

                <div class="mb-3 col-2">
                    <a href="listar.php" class="btn btn-dark">Voltar</a>
                </div>
            </div>
            <!-- Fechamento do container de botões -->

        </form>



    </div>
    <!-- Fechameento col-6 (form) -->


    <div class="col-6">
        <?php if ($msgErro): ?>
            <div class="alert alert-danger mt-3">
                <?= $msgErro ?>
            </div>
        <?php endif; ?>
    </div>
    <!-- fechamento col-6 (MsgErro) -->

</div>
<!-- fechamento row (MsgErro + form)








<?php
include(__DIR__ . "/../include/footer.php");
?>