<?php
require_once __DIR__ . '/../control/conjuntoControl.php';
$_REQUEST['acao'] = 2;
$control = new ConjuntoControl();
$dados = $control->executaAcao();
?>
<html>

<head>
  <title>Lista de conjunto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <table>
    <tr>
      <td>id_conjunto</td>
      <td>nome_conjunto</td>
      <td>armadura</td>
      <td>arma</td>
      <td>pocao</td>
      <td colspan='2'>Gerenciar</td>
    </tr>
    <?php
    foreach ($dados as $dado) {
    ?>
      <tr>
        <td><?php echo $dado['id_conjunto'] ?></td>
        <td><?php echo $dado['nome_conjunto'] ?></td>
        <td><?php echo $dado['armadura'] ?></td>
        <td><?php echo $dado['arma'] ?></td>
        <td><?php echo $dado['pocao'] ?></td>
        <td>
          <a href='../control/conjuntoControl.php?acao=3&id=<?php echo $dado['id_conjunto'] ?>'>Excluir</a>
        </td>
        <td><a href='../control/conjuntoControl.php?acao=4&id=<?php echo $dado['id_conjunto'] ?>'>Alterar</a></td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>