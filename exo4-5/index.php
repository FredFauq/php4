<?php
// Déclaration de la fonction numberChar
function numberChar($number, $char) {
// Concaténation et affichage
 echo $char.' a '.$number.' ans';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 5</title>
</head>
<body>
  <!-- Ouverture des balises PHP dans une balise p -->
  <p>
  <?php
 // Appel de la fonction numberChar
 numberChar(10,'Toto');
  ?>
</p>
</body>
</html>
