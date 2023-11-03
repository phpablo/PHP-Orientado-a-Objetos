<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Heraça II</title>
</head>

<body>
  <pre>
    <?php
    require_once 'Visitante.php';
    // $p1 = new Pessoa(); Dá erro pois um classe abstrata ñ se pd instanciar objetos dela 
    $v1 = new Visitante();
    $v1->setNome('Goku');
    $v1->setIdade(12);
    $v1->setSexo('M');

    print_r($v1);
    ?>
  </pre>

</body>

</html>