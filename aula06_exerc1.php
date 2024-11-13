<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exerc 10% de desconto</title>
</head>
<body>
  <?php
    $preco = $_GET["p"];
    echo "<h2>O preço do produto é R$</h2>" . number_format($preco,"2");
    $preco -= $preco * 0.1;
    echo "<h2><br/>Aplicando desconto de 10%, fica R$</h2>" . number_format($preco,"2")
  ?>
  
</body>
</html>