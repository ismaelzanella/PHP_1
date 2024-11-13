<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variá veis de Variáveis</title>
</head>
<body>
  <?php
    $x = "abc";
    $$x = "def";
    echo "O conteúdo da variável X é $x";
    echo "<br/>O conteúdo da variável criada abc é $abc";
  ?>
  
</body>
</html>