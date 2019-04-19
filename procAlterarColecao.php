<?php
require 'Conexao.php';

if ($_POST)
{
    if (isset($_POST['nome']))
    {
        $nome = $_POST['nome'];
    }
    if (isset($_POST['fornecedor']))
    {
        $fornecedor = $_POST['fornecedor'];
        $id = $_POST['id'];

        $sql = "UPDATE colecao SET nome = '$nome', idFornecedor = '$fornecedor' WHERE id = '$id'";
        mysqli_query($conn, $sql) or die("Erro: " . mysqli_error($conn));

        echo "<script>alert('Cole��o alterada com sucesso!');</script>";
        echo "<script>window.location = './ListarColecoes.php';</script>";
    }
} else {
    echo "<script>alert('Formul�rio inv�lido!');</script>";
    echo "<script>window.location = './ListarColecoes.php';</script>";
}
?>