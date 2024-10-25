<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guardar valoración</title>
  <link rel="stylesheet" href="css/style.css">
.</head>
<body>
<?php
  if (empty($_POST['rate'])) {
    echo "<h1 class=\"error\">No se encuentra valoración</h1>";
  } else {
    $rate = $_POST['rate'];
    $date = new DateTime();
    $filename = $date->format('Y m d H i'). '.csv';
  }
?>
  <h2>Gracias por tu valoración</h2>
  <p><a href="index.php">Volver a valorar</p>
</body>
</html>