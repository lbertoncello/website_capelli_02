<?php
require 'Conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM tamanho WHERE id = '$id'";
mysqli_query($conn, $sql) or die("Erro: " . mysqli_error($conn));
echo "<script>alert('Tamanho exclu�do com sucesso!');</script>";
echo "<script>window.location = './ListarTamanhos.php';</script>";
?>