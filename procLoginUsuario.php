<?php
session_start();
require 'Conexao.php';

if ($_POST)
{
    if (isset($_POST['email']))
    {
    	$email = $_POST['email'];

        $emai = addslashes($email);
    }

    if (isset($_POST['senha']))
    {
    	$senha = $_POST['senha'];

        $senha = addslashes($senha);

        $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

        $resultado = mysqli_query($conn, $sql) or die("Erro: " . mysqli_error($conn));

        if (mysqli_num_rows($resultado) > 0)
        {
        	$usuario = mysqli_fetch_assoc($resultado);

            $_SESSION['sLoginUsuario'] = $email;
            $_SESSION['sIdUsuario'] = $usuario['id'];
            if (isset($_POST['local']))
            {
                if ($_POST['local'] == "carrinho")
                {
                	header('Location: ./Carrinho.php');
                } elseif ($_POST['local'] == "pedidos") {
                    header('Location: ./Pedidos.php');
                } else {
                    header('Location: ./Index.php');
                }
            } else {
                header('Location: ./Index.php');
            }

        } else {
            echo "<script>alert('Usu�rio e/ou Senha Inv�lido(s)!');</script>";
            echo "<script>window.location = './Login.php';</script>";
        }

    }


} else {
    echo "<script>alert('Email e/ou Senha Inv�lido(s)!');</script>";
    echo "<script>window.location = './Login.php';</script>";
}

?>