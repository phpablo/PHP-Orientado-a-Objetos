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
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Bolsista.php';
    require_once 'Tecnico.php';
    // $p1 = new Pessoa(); Dá erro pois um classe abstrata ñ se pd instanciar objetos dela 
    // $v1 = new Visitante();
    // $v1->setNome('Goku');
    // $v1->setIdade(12);
    // $v1->setSexo('M');

    $t1 = new Tecnico();
    $t1->setNome('Android 8');
    $t1->setIdade(120);
    $t1->setSexo('A');
    $t1->setMatricula(1113);
    $t1->setCurso('Engenharia de Software');
    $t1->pagarMensal();
    $t1->praticar();
    $t1->setRegistroProfissional(2221);

    $a1 = new Aluno();
    $a1->setNome('Gohan');
    $a1->setIdade('19');
    $a1->setSexo('M');
    $a1->setMatricula(1111);
    $a1->setCurso('ADS');
    $a1->pagarMensal();

    $b1 = new Bolsista();
    $b1->setNome('Kuririn');
    $b1->setIdade(22);
    $b1->setSexo('M');
    $b1->setMatricula(1112);
    $b1->setCurso('S.I');
    $b1->setBolsa(98);
    $b1->pagarMensal();

    $p1 = new Professor();
    $p1->setEspecialidade('Artes Marciais');
    $p1->setSalario(3000);
    $p1->setNome('Kame');
    $p1->setIdade(200);
    $p1->setSexo('M');
    $p1->aumentoSal(150);


    print_r($a1);
    print_r($b1);
    print_r($p1);
    print_r($t1);
    ?>
  </pre>

</body>

</html>