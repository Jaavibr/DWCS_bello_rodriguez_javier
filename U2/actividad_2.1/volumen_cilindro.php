<?php
function volumen_cilindro(float $radio = 20, float $altura = 40)
{
    return M_PI * pow($radio, 2) * $altura;
}
echo volumen_cilindro(20,40)
?>