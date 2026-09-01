<?php
if (isset($obj))
  $objeto = $obj;
else
  $objeto = "";
?>
<html>

<head>
  <title><?= $objeto ? "Alterar" : "Cadastrar" ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <h2 class="mb-4"><?= $objeto ? "Alterar" : "Cadastrar" ?></h2>
    <form action="../control/poderControl.php" method="POST">
      <input type="hidden" name="acao" value="<?= $objeto ? 4 : 1 ?>">
      <input type="hidden" name="id" value="<?= $objeto ? $_REQUEST["id"] : '' ?>">
      <div class="mb-3"><label for="nome_poder" class="form-label">nome_poder</label><input type='text' name='nome_poder' class="form-control" value="<?= $objeto ? $objeto->getNome_poder() : '' ?>"></div>
      <div class="mb-3"><label for="custo" class="form-label">custo</label><input type='number' name='custo' class="form-control" value="<?= $objeto ? $objeto->getCusto() : '' ?>"></div>
      <div class="mb-3"><label for="tempo_espera" class="form-label">tempo_espera</label><input type='number' name='tempo_espera' class="form-control" value="<?= $objeto ? $objeto->getTempo_espera() : '' ?>"></div>
      <div class="mb-3"><label for="descricao" class="form-label">descricao</label><input type='text' name='descricao' class="form-control" value="<?= $objeto ? $objeto->getDescricao() : '' ?>"></div>
      <div class="mb-3"><label for="duracao" class="form-label">duracao</label><input type='text' name='duracao' class="form-control" value="<?= $objeto ? $objeto->getDuracao() : '' ?>"></div>
      <div class="mb-3"><label for="id_raca" class="form-label">id_raca</label><input type='number' name='id_raca' class="form-control" value="<?= $objeto ? $objeto->getId_raca() : '' ?>"></div>

      <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</body>

</html>