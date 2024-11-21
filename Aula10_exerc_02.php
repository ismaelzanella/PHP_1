<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 10 exercício 02</title>
</head>
<body>
  <?php
  /*Objetivo: Ler o dia da semana e mostrar se precisa ir para a escola*/
    $dhj = new DateTime();
    $dhjform = $dhj->format('Y-m-d');
    $d = $_GET["data"];
    if ($_GET["data"]==null){
      $d = $dhjform;
    }
    $dsem = date('l', strtotime($d)); //Retorna o dia da semana em inglês
    $dISO = new DateTime($d);
    $dform = $dISO->format("d/m/Y");

    if ($dsem == "Sunday"){
      $dsemBr = "Domingo";
      $escola = "não precisa ir para a escola!";
    } else if($dsem == "Saturday"){
      $dsemBr = "Sábado";
      $escola = "não precisa ir para a escola!";
    } else if($dsem == "Monday"){
      $dsemBr = "Segunda";
      $escola = "precisa ir para a escola!";
    } else if($dsem == "Tuesday"){
      $dsemBr = "Terça";
      $escola = "precisa ir para a escola!";   
    } else if($dsem == "Wednesday"){
      $dsemBr = "Quarta";
      $escola = "precisa ir para a escola!";
    } else if($dsem == "Thursday"){
      $dsemBr = "Quinta";
      $escola = "precisa ir para a escola!";  
    } else if($dsem == "Friday"){
      $dsemBr = "Sexta";
      $escola = "precisa ir para a escola!";
    }

    echo "Dia $dform é $dsemBr, então você $escola";
  ?>
  <a href="Aula10_exerc02.html">Voltar</a>  
</body>
</html>