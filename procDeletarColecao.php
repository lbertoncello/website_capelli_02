<?php
require 'Conexao.php';
$id = $_GET['id'];
$sql = "DELETE FROM colecao WHERE id = '$id'";
mysqli_query($conn, $sql) or die("Erro: " . mysqli_error($conn));
echo "<script>alert('Cole��o exclu�da com sucesso!');</script>";
echo "<script>window.location = './ListarColecoes.php';</script>";
?>