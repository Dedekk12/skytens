<?php
require_once(__DIR__ . "/../../controller/PersonagemController.php");
require_once(__DIR__ . "/../../controller/ConjuntoController.php");
require_once(__DIR__ . "/../../controller/PoderController.php");
require_once(__DIR__ . "/../../controller/RacaController.php");
/*
TODO - CRIAR SISTEMA DE LISTAGEM PARA AS CLASSES PODER,RACA,CONJUNTO PARA UTILIZAR DE SELECT
$cursoControl = new CursoControl();
$cursos = $cursoControl->listar();
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
        <h3><?= ($personagem && ($personagem->getId() > 0)) ? "Alterar" : "Inserir"  
            ?> Personagem</h3>
    </div>
    <div class="col-6">
        <form action="" method="post">
            <div class=" p-1 mb-2 border border-3 border-secondary rounded">

                <div class="">
                    <label for="nome" class="form-label"></label>
                    <input
                        value="<?= '' //($aluno != null) ? $aluno->getNome() : '' 
                                ?>"
                        type="text"
                        name="nome"
                        id="txtNome"
                        placeholder="Informe o nome"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label for="txtFisico" class="form-label"></label>
                    <input
                        value="<?= '' //($aluno != null) ? $aluno->getIdade() : '' 
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
                    <label for="txtMental" class="form-label"></label>
                    <input
                        value="<?= '' //($aluno != null) ? $aluno->getIdade() : '' 
                                ?>"
                        type="number"
                        name="mental"
                        id="txtMental"
                        min="0"
                        step="0.1"
                        placeholder="Informe seu valor Mental"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label for="txtVigor" class="form-label"></label>
                    <input
                        value="<?= '' //($aluno != null) ? $aluno->getIdade() : '' 
                                ?>"
                        type="number"
                        name="vigor"
                        id="txtVigor"
                        min="0"
                        step="0.1"
                        placeholder="Informe seu Vigor"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label for="txtMana" class="form-label"></label>
                    <input
                        value="<?= '' //($aluno != null) ? $aluno->getIdade() : '' 
                                ?>"
                        type="number"
                        name="mana"
                        id="txtMana"
                        min="0"
                        step="0.1"
                        placeholder="Informe sua Mana"
                        class="form-control">
                </div>




                <div class="mb-3" class="form-floating">
                    <label for="selEstrang">Genero</label>
                    <select name="estrangeiro" id="selEstrang" class="form-select">
                        <option value="">----Selecione----</option>
                        <option value="M" <?= '' //($aluno != null) && ($aluno->getEstrangeiro() == "S") ? "selected" : '' 
                                            ?>>Sim</option>
                        <option value="F" <?= '' //($aluno != null) && ($aluno->getEstrangeiro() == "N") ? "selected" : '' 
                                            ?>>Não</option>
                    </select>
                </div>

                <div class="mb-3" class="form-floating">
                    <label for="selConjunto" label>
                        <select name="Conjunto" id="selConjunto" class="form-select">
                            <!-- Cursos criados dinamicamente -->
                            <option>---Selecione---</option>
                            <?php /* foreach ($conjuntos as $c): ?>
                                <option value="<?= $c->getId() ?>" <?= '' //($aluno != null) && ($aluno->getCurso()->getId() == $c->getId() ? "selected" : '') 
                                                                    ?>><?= $c ?></option>
                            <?php endforeach; */ ?>
                        </select>
                </div>

                <div class="mb-3" class="form-floating">
                    <label for="selPoder" label>
                        <select name="Poder" id="selPoder" class="form-select">
                            <!-- Cursos criados dinamicamente -->
                            <option>---Selecione---</option>
                            <?php /* foreach ($poderes as $p): ?>
                            <option value="<?= $c->getId() ?>" <?= ''//($aluno != null) && ($aluno->getCurso()->getId() == $c->getId() ? "selected" : '') ?>><?= $c ?></option>
                        <?php endforeach; */ ?>
                        </select>
                </div>

                <div class="mb-3" class="form-floating">
                    <label for="selRaca" label>
                        <select name="Raca" id="selRaca" class="form-select">
                            <!-- Cursos criados dinamicamente -->
                            <option>---Selecione---</option>
                            <?php /* foreach ($racas as $r): ?>
                            <option value="<?= $c->getId() ?>" <?= ''//($aluno != null) && ($aluno->getCurso()->getId() == $c->getId() ? "selected" : '') ?>><?= $c ?></option>
                        <?php endforeach; */ ?>
                        </select>
                </div>



                <div class="mb-3">
                    <input type="hidden" name="id" value="<?= $personagem ? $personagem->getId() : 0 ?>"></input>
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

    <!-- 
    <div class="col-6">
        <div class="mt-3 <?= '' //$msgErro ? "alert alert-danger" : '' 
                            ?>">
            <?= '' //$msgErro  
            ?>
        </div>
    </div>
    fechamento col-6 (MsgErro) -->

</div>
<!-- fechamento row (MsgErro + form)








<?php
include(__DIR__ . "/../include/footer.php");
?>