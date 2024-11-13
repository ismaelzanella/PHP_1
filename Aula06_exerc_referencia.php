<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício de Referência em PHP</title>
</head>
<body>
  <?php
    $a = 3;
    $b = &$a;
    $b += 5;
    echo "A variável A vale $a";
    echo "<br/>A variável B vale $b";

  ?>
  
</body>
</html>