<?php
// Déclaration de la fonction whatAge
function whatAge($firstName, $lastName, $age){
// Concaténation et affichage
echo $firstName . ' ' . $lastName . ' tu as ' . $age . ' ans.';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 6</title>
</head>
<body>
  <!-- Ouverture des balises PHP dans une balise p -->
  <p>
  <?php
    // Appel de la fonction
    whatAge('Pierre','Martin',21);
  ?>
  </p>
</body>
</html>
