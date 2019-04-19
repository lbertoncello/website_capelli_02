<?php
session_start();

unset($_SESSION['sLoginAdm']);
unset($_SESSION['sIdAdm']);

header("Location: ./Index.php");
?>