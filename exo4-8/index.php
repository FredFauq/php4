<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 8</title>
</head>
<body>
  <?php
    // Déclaration de la fonction numberfunction
    function numberFunction($number1, $number2, $number3) {
     // Concaténation des 3 nombres en parametre de la fonction
     $result = $number1 + $number2 + $number3;
     // Affichage du resultat
     echo $result;
   }
     // Appel de la fonction et définition des parametres
     numberFunction(10, 20, 30);

  ?>
</body>
</html>
