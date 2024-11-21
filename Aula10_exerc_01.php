<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .button {
      display: inline-block;
      padding: 5px 10px;
      font-size: 12px;
      color: black;
      background-color: white;
      text-align: center;
      text-decoration: none;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .button:hover {
      background-color: #0056b3;
      color: white;
    }
  </style>
</head>
<body>
  <?php
    $n = isset($_GET["num"])?$_GET["num"]:0;
    $o = isset($_GET["oper"])?$_GET["oper"]:1;
    switch ($o){
      case 1: 
        $r = $n * 2;
        break;
      case 2:
        $r = $n ** 3;
        break;
      case 3:
        $r = sqrt($n); // $n ^ 0.5(1/2)
    }
    echo "O resultado da operação é: $r";
  ?>
  <br/>
  <a href="Aula10_exerc01.html" class="button">Voltar</a>
</body>
</html>