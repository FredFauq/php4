<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 4</title>
</head>
<body>
  <!-- Ouverture des balises PHP dans une balise p -->
  <p>
  <?php
  // Déclaration de la fonction test
  function test($firstNumber, $secondNumber){
    // Condition si $firstNumber est supérieur à $secondNumber
    if ($firstNumber > $secondNumber) {
      echo 'Le premier nombre est plus grand.';
    // Condition si $firstNumber est identique à $secondNumber
    } elseif ($firstNumber == $secondNumber) {
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
</p>
</body>
</html>
