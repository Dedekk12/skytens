<?php
require_once __DIR__ . '/../control/personagemControl.php';
$_REQUEST['acao'] = 2;
$control = new PersonagemControl();
$dados = $control->executaAcao();
?>
<html>

<head>
  <title>Lista de personagem</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <table>
    <tr>
      <td>id_personagem</td>
      <td>nome</td>
      <td>fisico</td>
      <td>mental</td>
      <td>genero</td>
      <td>vigor</td>
      <td>mana</td>
      <td>id_conjunto</td>
      <td>id_poder</td>
      <td>id_raca</td>
      <td colspan='2'>Gerenciar</td>
    </tr>
    <?php
    foreach ($dados as $dado) {
    ?>
      <tr>
        <td><?php echo $dado['id_personagem'] ?></td>
        <td><?php echo $dado['nome'] ?></td>
        <td><?php echo $dado['fisico'] ?></td>
        <td><?php echo $dado['mental'] ?></td>
        <td><?php echo $dado['genero'] ?></td>
        <td><?php echo $dado['vigor'] ?></td>
        <td><?php echo $dado['mana'] ?></td>
        <td><?php echo $dado['id_conjunto'] ?></td>
        <td><?php echo $dado['id_poder'] ?></td>
        <td><?php echo $dado['id_raca'] ?></td>
        <td>
          <a href='../control/personagemControl.php?acao=3&id=<?php echo $dado['id_personagem'] ?>'>Excluir</a>
        </td>
        <td><a href='../control/personagemControl.php?acao=4&id=<?php echo $dado['id_personagem'] ?>'>Alterar</a></td>
      </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>