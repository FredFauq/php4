<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 4</title>
</head>
<body>
  <?php
  // Déclaration de la fonction test
  function test($number1, $number2){
    // Condition si number1 est supérieur à number2
    if ($number1 > $number2) {
      echo 'Le premier nombre est plus grand.';
    // Condition si number1 est identique à number2
    } elseif ($number1 == $number2) {
      echo 'Les deux nombres sont identiques.';
    // dans les autre cas
    } else {
      echo 'Le premier nombre est plus petit.';//
    }
  }
  // Appel de la fonction avec différentes variables
  test(10,5);
  test(8,23);
  test(6, 6);
  ?>
</body>
</html>
