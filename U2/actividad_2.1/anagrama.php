<?php
function anagrama(string $cadena = 'VAca', string $cadena2 = 'CAva')
{
    strtolower($cadena);
    strtolower($cadena2);

    $cadena = str_split($cadena);
    $cadena2 = str_split($cadena2);

    sort($cadena);
    sort($cadena2);

}
echo anagrama("vaca", "cava");
?>