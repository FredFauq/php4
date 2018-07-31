<?php
$choice = 'vrai';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 2</title>
</head>
<body>
  <!-- Ouverture des balises PHP dans une balise p -->
  <p>
    <?php
    // Définition de la variable
    $string = 'Bonjour';
    // Création de la fonction
     function returnString($string){
       //retour de la valeur de la variable
       return $string;
     }
     // Affichage de la fonction Bonjour
     echo returnString($string);
    ?>
  </p>
</body>
</html>
