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
    <form action="../control/personagemControl.php" method="POST">
      <input type="hidden" name="acao" value="<?= $objeto ? 4 : 1 ?>">
      <input type="hidden" name="id" value="<?= $objeto ? $_REQUEST["id"] : '' ?>">
      <div class="mb-3"><label for="nome" class="form-label">nome</label><input type='text' name='nome' class="form-control" value="<?= $objeto ? $objeto->getNome() : '' ?>"></div>
      <div class="mb-3"><label for="fisico" class="form-label">fisico</label><input type='text' name='fisico' class="form-control" value="<?= $objeto ? $objeto->getFisico() : '' ?>"></div>
      <div class="mb-3"><label for="mental" class="form-label">mental</label><input type='text' name='mental' class="form-control" value="<?= $objeto ? $objeto->getMental() : '' ?>"></div>
      <div class="mb-3"><label for="genero" class="form-label">genero</label><input type='text' name='genero' class="form-control" value="<?= $objeto ? $objeto->getGenero() : '' ?>"></div>
      <div class="mb-3"><label for="vigor" class="form-label">vigor</label><input type='text' name='vigor' class="form-control" value="<?= $objeto ? $objeto->getVigor() : '' ?>"></div>
      <div class="mb-3"><label for="mana" class="form-label">mana</label><input type='text' name='mana' class="form-control" value="<?= $objeto ? $objeto->getMana() : '' ?>"></div>
      <div class="mb-3"><label for="id_conjunto" class="form-label">id_conjunto</label><input type='number' name='id_conjunto' class="form-control" value="<?= $objeto ? $objeto->getId_conjunto() : '' ?>"></div>
      <div class="mb-3"><label for="id_poder" class="form-label">id_poder</label><input type='number' name='id_poder' class="form-control" value="<?= $objeto ? $objeto->getId_poder() : '' ?>"></div>
      <div class="mb-3"><label for="id_raca" class="form-label">id_raca</label><input type='number' name='id_raca' class="form-control" value="<?= $objeto ? $objeto->getId_raca() : '' ?>"></div>

      <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</body>

</html>