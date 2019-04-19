<?php
require 'Conexao.php';
if ($_POST)
{
	if (isset($_POST['nome']))
    {
        $nome = $_POST['nome'];
    }
    if (isset($_POST['cpf']))
    {
        $cpf = $_POST['cpf'];
    }

    if (isset($_POST['cep']))
    {
        $cep = $_POST['cep'];
    }

    if (isset($_POST['estado']))
    {
        $estado = $_POST['estado'];
    }

    if (isset($_POST['tel']))
    {
        $tel = $_POST['tel'];
    }

    if (isset($_POST['cidade']))
    {
        $cidade = $_POST['cidade'];
    }

    if (isset($_POST['bairro']))
    {
        $bairro = $_POST['bairro'];
    }

    if (isset($_POST['rua']))
    {
        $rua = $_POST['rua'];
    }

    if (isset($_POST['numero']))
    {
        $numero = $_POST['numero'];
    }

    if (isset($_POST['email']))
    {
        $email = $_POST['email'];
    }

    if (isset($_POST['senha']))
    {
        $senha = $_POST['senha'];

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $cep = $_POST['cep'];
        $estado = $_POST['estado'];
        $tel = $_POST['tel'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO usuario (nome, cpf, cep, uf, telefone, cidade, bairro, rua, numero, email, senha)
                                                                VALUES ('$nome', '$cpf', '$cep', '$estado', '$tel', '$cidade', '$bairro', '$rua',
                                                                            '$numero', '$email', '$senha')";
        mysqli_query($conn, $sql) or die("Erro: " . mysqli_error($conn));

        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>window.location = './Cadastro.php';</script>";
    }
} else {
    echo "<script>alert('Formul�rio inv�lido!');</script>";
    echo "<script>window.location = './Cadastro.php';</script>";
}

?>