<?php
// Définition des variables
$firstString = 'Hello';
$secondString = 'World';
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 3</title>
</head>
<body>
  <!-- Ouverture des balises PHP dans une balise p -->
  <p>
  <?php
  // Définition de la fonction
  function returnChoice($firstString, $secondString){
    // Retour de la concaténation des deux variables
     return $result = $firstString . $secondString;
   }
   // Affichage du résultat de la fonction
   echo returnChoice($firstString , $secondString);
  ?>
</p>
</body>
</html>
