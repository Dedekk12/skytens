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
    <form action="../control/racaControl.php" method="POST">
      <input type="hidden" name="acao" value="<?= $objeto ? 4 : 1 ?>">
      <input type="hidden" name="id" value="<?= $objeto ? $_REQUEST["id"] : '' ?>">
      <div class="mb-3"><label for="nome_raca" class="form-label">nome_raca</label><input type='number' name='nome_raca' class="form-control" value="<?= $objeto ? $objeto->getNome_raca() : '' ?>"></div>
      <div class="mb-3"><label for="habilidade" class="form-label">habilidade</label><input type='text' name='habilidade' class="form-control" value="<?= $objeto ? $objeto->getHabilidade() : '' ?>"></div>
      <div class="mb-3"><label for="bonus_incial" class="form-label">bonus_incial</label><input type='text' name='bonus_incial' class="form-control" value="<?= $objeto ? $objeto->getBonus_incial() : '' ?>"></div>

      <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</body>

</html>