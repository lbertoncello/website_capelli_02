<?php

function ValidarUsuario($local) {
    if (!isset($_SESSION['sIdUsuario']))
    {
        header("Location: Login.php?local=$local");
    }
}

function VerificarCampo() {
    $campo = array();
    if (!isset($_SESSION['sIdUsuario']))
    {
        $campo[0] = "Login";
        $campo[1] = "Login.php";
    } else {
        $campo[0] = "Sair";
        $campo[1] = "SairUsuario.php";
    }
    return $campo;
}

?>