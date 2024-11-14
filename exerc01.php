<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ler o ano de nascimento e mostrar se pode votar</title>
</head>
<body>
  <?php
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i= date("Y") - $a;
    echo "Você nasceu em $a e tem $i anos! <br/>";
    if($i < 16){
      $v = "não vota";
    } else if(($i >= 16 && $i < 18) || ($i > 65)) {
      $v = "vota se quiser";
    } else {
      $v = "vota obrigatoriamente";
    }
    echo "Com essa idade você $v <br/>";
  ?>

  <a href="Aula09_exerc01.html">Voltar</a>  
</body>
</html>