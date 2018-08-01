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
      // Création d'une variable pour les messages
      $message = 'Le premier nombre est plus grand.';
    // Condition si $firstNumber est identique à $secondNumber
    } elseif ($firstNumber == $secondNumber) {
      $message = 'Les deux nombres sont identiques.';
    // dans les autre cas
    } else {
      $message = 'Le premier nombre est plus petit.';
    }
    // On ne returne pas plusieurs fois dans une fonction
    return $message;
  }
  // Appel de la fonction avec différentes variables
  echo test(10,5);
  ?>
  <br />
  <?php
  echo test(8,23);
  ?>
  <br />
  <?php
  echo test(6, 6);
  ?>
</p>
</body>
</html>
