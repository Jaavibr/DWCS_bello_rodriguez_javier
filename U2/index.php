<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $var = rand(0, 7);
    while($var<10){
        if($var < 6) {
            echo("$var es menor que 6");
        } else {
            echo ("$var es mayor que 6");
        }
        $var++;
        echo '<br>';
    }
    ?>
</body>
</html>