<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7</title>
</head>
<body>
  <!-- Ouverture des balises PHP dans une balise <p> -->
  <p>
  <?php
    // Déclaration de la fonction ageGender
    function ageGender($gender, $age) {
    // Condition homme et majeur
    if($gender == 'Homme' && $age >= 18) {
      echo 'Vous êtes un homme et vous êtes majeur.';
    }
    // Condition femme et majeur
    else if($gender == 'Femme' && $age >= 18) {
      echo 'Vous êtes une femme et vous êtes majeure.';
    }
    // Condition homme et mineur
    else if($gender == 'Homme' && $age < 18) {
      echo 'Vous êtes un homme et vous êtes mineur.';
    }
    else {
     // Condition femme et mineur
      echo 'Vous êtes une femme et vous êtes mineur.';
    }
  }
  // Appel de la fonction dans différents cas
  ageGender('Homme',21);
  ?>
  <br />
  <?php
  ageGender('Femme',21);
  ?>
  <br />
  <?php
  ageGender('Femme',15);
  ?>
  <br />
  <?php
  ageGender('Homme',15);
  ?>
  </p>
</body>
</html>
