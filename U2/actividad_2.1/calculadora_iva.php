<?php
function calculadora_iva(float $precio, int $iva=21):float
{
    return $precio*($iva/100);
}

 echo calculadora_iva(501, 21);
?>