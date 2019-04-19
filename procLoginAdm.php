<?php
session_start();
require 'Conexao.php';


if ($_POST)
{
    if(isset($_POST['login'])){
        $login = $_POST['login'];

        $login = addslashes($login);
    }

    if(isset($_POST['senha'])){
        $senha = $_POST['senha'];

        $senha = addslashes($senha);

        $sql = "SELECT * FROM administradores WHERE login = '$login' AND senha = '$senha' AND situacao = '1'";

        $resultado = mysqli_query($conn, $sql) or die("Erro: " . mysqli_error($conn));
        
        if (mysqli_num_rows($resultado) > 0)
        {
            $adm = mysqli_fetch_assoc($resultado);

        	$_SESSION['sLoginAdm'] = $login;
            $_SESSION['sIdAdm'] = $adm['id'];

            header("Location: ./Index-adm.php");
        } else {
            echo "<script>alert('Usu�rio e/ou Senha Inv�lido(s)!');</script>";
            echo "<script>window.location = './LoginAdm.php';</script>";
        }
        
    }
} else {
    echo "<script>alert('Usu�rio Senha Inv�lido(s)!');</script>";
    echo "<script>window.location = './LoginAdm.php';</script>";
}

?>