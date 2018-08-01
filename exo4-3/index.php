<?php
// Définition de la fonction
function returnString($firstString, $secondString){
  // Retour de la concaténation des deux variables
   return  $firstString . $secondString;
 }
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
   // Affichage du résultat de la fonction
   echo returnString('Hello ','World !');
  ?>
</p>
</body>
</html>
