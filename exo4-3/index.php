<?php
$string1 = 'Hello';
$string2 = 'World';
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 3</title>
</head>
<body>
  <?php
  function returnChoice($string1, $string2){
     return $result = $string1 . $string2;
   }
   echo returnChoice($string1, $string2);
  ?>
</body>
</html>
