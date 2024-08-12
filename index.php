<!--
<html>
  <head>
    <title>Página PHP</title>
  </head>
  <body>
    <?php echo 'O comando echo do PHP imprime esse texto dentro do documento<br/>'; ?>
    Também é possível usar a tag curta <?= 'para mostrar esse texto' ?>
    ou para exibir o resultado de 1 + 1 que é <?= 1 + 1 ?>.
  </body>
</html>
-->
<?php
  $name = 'Ninguem';

  $city = 'Belem';

  $bullets = array(556, 762, '.40');

  function sum($a, $b){
    return $a + $b;
  }
?>

<html>
  <head>
    <title>Pagina Suspeita do <?=$name?></title>
  </head>
  <body>
  <h1>Pagina do <?=$name?></h1>
    <p> Meu nome eh <?=$name?>, eu vim de <?=$city?>...</p>
    <p> Calibres legais:</p>
    <ul>
      <?php foreach ($bullets as $bullet) { ?>
        <li><?=$bullet?></li>
      <?php } ?>
    </ul>
    <p>Hoje eh <?= date("d/m/Y") ?>, depois de hoje eh <?= (date("d")+1).'/'.date("m/Y")?></p>
    <p>Quanto da mil meu com mil teu? <?=sum(1000,1000)?></p>
  </body>
</html>
