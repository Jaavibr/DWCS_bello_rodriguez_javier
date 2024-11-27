<?php
function producto(int $n1, int $n2):int
{
    return $n1*$n2;
}
 function multiplicar(int $num) 
 {
     echo "<ul>";
     for($i=1;$i<10;$i++){
       $res = producto($i,$num);
       echo $num.'x '.$i.' = ';
       if($res%3 == 0) {
         echo "?";
       } else {
         echo $res;
       }
       echo '<br>';
     }
 }
?>