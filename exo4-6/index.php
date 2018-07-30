<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 6</title>
</head>
<body>
  <?php
    // Déclaration de la fonction whatAge
    function whatAge($firstName, $lastName, $age) {
    // Concaténation
    echo $firstName . ' ' . $lastName . ' tu as ' . $age . ' ans.';
    }
    // Appel de la fonction
    whatAge('Pierre','Martin',21);
  ?>
</body>
</html>
