<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 8</title>
</head>
<body>
  <!-- Ouverture des balises PHP dans une balise p -->
  <p>
  <?php
    // Déclaration de la fonction numberfunction
    function numberFunction($firstNumber, $secondNumber, $thirdNumber) {
     // Concaténation des 3 nombres en parametre de la fonction
     $result = $firstNumber+ $secondNumber + $thirdNumber;
     // Affichage du resultat
     echo $result;
   }
     // Appel de la fonction et définition des parametres
     numberFunction(10, 20, 30);
  ?>
</p>
</body>
</html>
