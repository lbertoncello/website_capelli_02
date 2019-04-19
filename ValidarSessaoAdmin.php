<?php
session_start();

if (!isset($_SESSION['sIdAdm']))
{
	header('Location: LoginAdm.php');
}

?>