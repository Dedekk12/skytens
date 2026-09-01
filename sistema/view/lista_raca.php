<?php
require_once __DIR__ . '/../control/racaControl.php';
$_REQUEST['acao'] = 2;
$control = new RacaControl();
$dados = $control->executaAcao();
?>
<html>

<head>
  <title>Lista de raca</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <table>
    <tr>
      <td>id_raca</td>
      <td>nome_raca</td>
      <td>habilidade</td>
      <td>bonus_incial</td>
      <td colspan='2'>Gerenciar</td>
    </tr>
    <?php
    foreach ($dados as $dado) {
    ?>
      <tr>
        <td><?php echo $dado['id_raca'] ?></td>
        <td><?php echo $dado['nome_raca'] ?></td>
        <td><?php echo $dado['habilidade'] ?></td>
        <td><?php echo $dado['bonus_incial'] ?></td>
        <td>
          <a href='../control/racaControl.php?acao=3&id=<?php echo $dado['id_raca'] ?>'>Excluir</a>
        </td>
        <td><a href='../control/racaControl.php?acao=4&id=<?php echo $dado['id_raca'] ?>'>Alterar</a></td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>