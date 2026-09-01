<?php
require_once __DIR__ . '/../control/poderControl.php';
$_REQUEST['acao'] = 2;
$control = new PoderControl();
$dados = $control->executaAcao();
?>
<html>

<head>
  <title>Lista de poder</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <table>
    <tr>
      <td>id_poder</td>
      <td>nome_poder</td>
      <td>custo</td>
      <td>tempo_espera</td>
      <td>descricao</td>
      <td>duracao</td>
      <td>id_raca</td>
      <td colspan='2'>Gerenciar</td>
    </tr>
    <?php
    foreach ($dados as $dado) {
    ?>
      <tr>
        <td><?php echo $dado['id_poder'] ?></td>
        <td><?php echo $dado['nome_poder'] ?></td>
        <td><?php echo $dado['custo'] ?></td>
        <td><?php echo $dado['tempo_espera'] ?></td>
        <td><?php echo $dado['descricao'] ?></td>
        <td><?php echo $dado['duracao'] ?></td>
        <td><?php echo $dado['id_raca'] ?></td>
        <td>
          <a href='../control/poderControl.php?acao=3&id=<?php echo $dado['id_poder'] ?>'>Excluir</a>
        </td>
        <td><a href='../control/poderControl.php?acao=4&id=<?php echo $dado['id_poder'] ?>'>Alterar</a></td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>