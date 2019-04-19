<?php
require("Conexao.php");

$caminho = "Vestidos/";
$id = $_GET['id'];

$sql = "SELECT imagem FROM vestido WHERE id = '$id'";
$sql_exec = mysqli_query($conn, $sql) or die("N�o foi poss�vel selecionar os dados");
$linha = mysqli_fetch_assoc($sql_exec) or die("N�o foi poss�vel receber os dados");
$imagem_nome_rem = $linha['imagem'];

$sql = "DELETE FROM vestido WHERE id='$id'";
$sql_exec = mysqli_query($conn, $sql) or die("N�o foi poss�vel remover os dados");
if ($sql_exec){
    unlink("$caminho$imagem_nome_rem"); 
    echo "<script>alert('Vestido removido com sucesso!');</script>";
    echo "<script>window.location = './ListarVestidos.php';</script>";                        
}  
?>