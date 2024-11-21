<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $c = 1;
    while ($c <= 5){
      $v = 0;
      $v += $_GET["v$c"];
      echo "$v ";
      $c++;
    }
  ?>  
</body>
</html>