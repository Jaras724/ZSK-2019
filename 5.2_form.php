<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $country = $_GET['country'];
    switch ($country) {
      case 'p':
        $country='Polska';
        break;

      default:
        // code...
        break;
    }
    echo $country, "<br/>";
$surname = $_GET['surname'];
echo $surname;

     ?>
  </body>
</html>
