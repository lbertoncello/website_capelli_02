<?php
session_start();

unset($_SESSION['sLoginUsuario']);
unset($_SESSION['sIdUsuario']);
unset($_SESSION['aluguel']);

header("Location: ./Index.php");
?>