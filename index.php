<?php
$departments = array(
  '02' => 'Aisne',
  '59' => 'Nord',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP partie3 exo6</title>
</head>
<body>
  <?php foreach($departments as $key => $value){ ?>
    <p>Le département <?php echo $value; ?> a le numéro <?= $key; ?></p>
  <?php }; ?>
</body>
</html>
