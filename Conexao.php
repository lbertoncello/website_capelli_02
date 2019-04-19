<?php
$local_serve = "localhost";    // local do servidor
$usuario_serve = "root";       // nome do usuario
$senha_serve = "";             // senha
$banco_de_dados = "trabalhopw";      // nome do banco de dados
$conn = mysqli_connect($local_serve,$usuario_serve,$senha_serve) or die ("O servidor n�o responde!");
$db = mysqli_select_db($conn, $banco_de_dados) or die ("Erro ao selecionar o BD");


?>
