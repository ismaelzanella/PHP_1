<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Situação do aluno</title>
  <style>
    * {
      font-size: 16pt;
    }
    span.sit {
      font-size: 20pt;
      color: red;
    }
  </style>
</head>
<body>
  <?php
    $n1=isset($_GET["nota1"])?$_GET["nota1"]:0;
    $n2=isset($_GET["nota2"])?$_GET["nota2"]:0;
    $m=($n1+$n2)/2;
    echo "A média entre <span class='sit'>$n1</span>  e  <span class='sit'>$n2</span>  é igual a  <span class='sit'>$m</span><br/>";
    if($m<5){
      $sit="REPROVADO";
    } else if($m>=5 && $m<7){
      $sit="RECUPERAÇÃO";
    } else {
      $sit="APROVADO";
    }
    echo "Situação do aluno:  <span class='sit'>$sit</span>";
  ?>
  
</body>
</html>