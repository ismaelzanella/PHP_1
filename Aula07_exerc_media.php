<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado de aprovação</title>
</head>
<body>
  <?php
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1+$nota2)/2;
    echo "A média entre $nota1 e $nota2 é $m <br/>";
    echo "A situação do aluno é ".(($m < 6) ? "REPROVADO":"APROVADO");
  ?>
  
</body>
</html>