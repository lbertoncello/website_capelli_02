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

        $sql = "INSERT INTO colecao (nome, idFornecedor) VALUES ('$nome', '$fornecedor')";
        mysqli_query($conn, $sql) or die("Erro: " . mysqli_error($conn));

        echo "<script>alert('Cole��o cadastrada com sucesso!');</script>";
        echo "<script>window.location = './TelaCadastroColecao.php';</script>";
    } 
} else {
    echo "<script>alert('Digite todas as informa��es pedidas!');</script>";
    echo "<script>window.location = './TelaCadastroColecao.php';</script>";
}

?>