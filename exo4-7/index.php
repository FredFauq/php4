<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7</title>
</head>
<body>
  <?php
    // Déclaration de la fonction ageGender
    function ageGender($age, $gender) {
    // Condition homme et majeur
    if($gender == 'Homme' && $age >= 18) {
      echo 'Vous êtes un homme et vous êtes majeur. ';
    }
    // Condition femme et majeur
    else if($gender == 'Femme' && $age >= 18) {
      echo 'Vous êtes une femme et vous êtes majeur. ';
    }
    // Condition homme et mineur
   else if($gender == 'Homme' && $age < 18) {
      echo 'Vous êtes un homme et vous êtes mineur. ';
    }
   else {
     // Condition femme et mineur
      echo 'Vous êtes une femme et vous êtes mineur. ';
    }
  }
  // Appel de la fonction dans différents cas
  ageGender('Homme', 21);
  ageGender('Femme',21);
  ageGender('Femme',15);
  ageGender('Homme',15);
  ?>
</body>
</html>
