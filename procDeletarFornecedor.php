<?php
require 'Conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM fornecedor WHERE id = '$id'";
mysqli_query($conn, $sql) or die("Erro: " . mysqli_error($conn));
echo "<script>alert('Fornecedor exclu�do com sucesso!');</script>";
echo "<script>window.location = './ListarFornecedores.php';</script>";
?>