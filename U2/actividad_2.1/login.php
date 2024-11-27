<?php
function login(string $nombre = "admin", string $pass = "1234")
{
    if(!empty($nombre) && !empty($pass)) {
        if($nombre === "admin" && $pass === "1234") {
            return "Login correcto";
        } else {
            return "Login incorrecto";
        }
    } else {
        return "Debes introducir un nombre y una contraseña";
    }
}
?>