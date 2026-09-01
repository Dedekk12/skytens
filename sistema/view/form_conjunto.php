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
    <form action="../control/conjuntoControl.php" method="POST">
      <input type="hidden" name="acao" value="<?= $objeto ? 4 : 1 ?>">
      <input type="hidden" name="id" value="<?= $objeto ? $_REQUEST["id"] : '' ?>">
      <div class="mb-3"><label for="nome_conjunto" class="form-label">nome_conjunto</label><input type='text' name='nome_conjunto' class="form-control" value="<?= $objeto ? $objeto->getNome_conjunto() : '' ?>"></div>
      <div class="mb-3"><label for="armadura" class="form-label">armadura</label><input type='text' name='armadura' class="form-control" value="<?= $objeto ? $objeto->getArmadura() : '' ?>"></div>
      <div class="mb-3"><label for="arma" class="form-label">arma</label><input type='text' name='arma' class="form-control" value="<?= $objeto ? $objeto->getArma() : '' ?>"></div>
      <div class="mb-3"><label for="pocao" class="form-label">pocao</label><input type='text' name='pocao' class="form-control" value="<?= $objeto ? $objeto->getPocao() : '' ?>"></div>

      <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</body>

</html>