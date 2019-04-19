<?php
require 'Conexao.php';

if ($_POST)
{
	if(isset($_POST['nome'])) {
        $nome = $_POST['nome'];
    } 

    if(isset($_POST['pais'])) {
        $pais = $_POST['pais'];
    } 

    if(isset($_POST['cidade'])) {
        $cidade = $_POST['cidade'];
    } 

    if(isset($_POST['bairro'])) {
        $bairro = $_POST['bairro'];
    } 

    if(isset($_POST['rua'])) {
        $rua = $_POST['rua'];
    } 

    if(isset($_POST['cep'])) {
        $cep = $_POST['cep'];
    } 

    if(isset($_POST['tel'])) {
        $tel = $_POST['tel'];
    } 

    if(isset($_POST['num'])) {
        $num = $_POST['num'];
    } 


    if(isset($_POST['email'])) {
        $email = $_POST['email'];

        $sql = "INSERT INTO fornecedor (nome, pais, cidade, bairro, rua, numero, cep, telefone, email)
                                VALUES ('$nome', '$pais', '$cidade', '$bairro', '$rua', '$num', '$cep', '$tel', '$email')";

        mysqli_query($conn, $sql) or die("Erro: " . mysqli_error($conn));

        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>window.location = './TelaCadastroFornecedor.php';</script>";
    } 
} else {
    echo "<script>alert('Formul�rio inv�lido!');</script>";
    echo "<script>window.location = './TelaCadastroFornecedor.php';</script>";
}

?>