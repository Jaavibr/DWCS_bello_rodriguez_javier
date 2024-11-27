<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejemplo</title>
  </head>
  <!-- empieza el cierpo. -->
  <body>
    <!-- Hola a todos. -->
    <?php

    $num = 1;

    /*echo "<ul>";
    for($i=1;$i<10;$i++){
      $res = $num*$i;
      echo $num.'x '.$i.' = ';
      if($res%3 == 0) {
        echo "";
      } else {
        echo $res;
      }
    }
    echo "</ul>";
    */

    include('./funciones.php');
    multiplicar(5);

    ?>
  </body>
</html>
