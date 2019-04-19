<?php
require 'Conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM usuario WHERE id = '$id'";
mysqli_query($conn, $sql) or die("Erro: " . mysqli_error($conn));

echo "<script>alert('Usu�rio exclu�do com sucesso!');</script>";
echo "<script>window.location = './ListarUsuarios.php';</script>";
?>