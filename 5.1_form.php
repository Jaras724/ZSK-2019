<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
if(!empty($_GET['surname'])) {
  $surname = $_GET['surname'];
  echo $surname;
} else {
  header('location: ./form5.php');
}

     ?>
     <form class="" action="5.2_form.php" method="get">
      <input type="radio" name="country" value="p" checked>polska
      <input type="radio" name="country" value="g">niemcy
      <input type="radio" name="country" value="u">usa
      <input type="submit" name="przycisk" value="zatwierdz">
      <input type="hidden" name="surname" value="<?php echo $surname; ?>">
     </form>
  </body>
</html>
