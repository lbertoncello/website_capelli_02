<?php
require 'Conexao.php';

if ($_POST)
{
	if (isset($_POST['dimensoes']))
    {
        $dimensoes = $_POST['dimensoes'];

        $sql = "INSERT INTO tamanho (dimensoes)
                VALUES  ('$dimensoes')";
        mysqli_query($conn, $sql) or die("Erro: " . mysqli_error($conn));

        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>window.location = './TelaCadastroTamanho.php';</script>";
    } 
}

?>