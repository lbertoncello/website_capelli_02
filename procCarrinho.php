<?php
session_start();
require 'Conexao.php';
require 'ValidarSessaoUsuario.php';

ValidarUsuario("carrinho");

if (isset($_SESSION['sIdUsuario']))
{

    $total = $_POST['total'];    
	$idUsuario = $_SESSION['sIdUsuario'];
    $dataAluguel = date("Y-m-d");
    $dataEntrega = date("Y-m-d", strtotime("+7 days"));

    $sql = "INSERT INTO aluguel (idUsuario, dataAluguel, dataEntrega, valor)
                VALUES ('$idUsuario', '$dataAluguel', '$dataEntrega', '$total')";


    if (mysqli_query($conn, $sql))
    {
        $aluguelId = mysqli_insert_id($conn);
    	$ids = array_keys($_SESSION['aluguel']);
        for ($i = 0; $i < count($ids); $i++)
        {
        	$id = $ids[$i];
            $qtd = $_SESSION['aluguel'][$id];

            $sql = "SELECT * FROM vestido WHERE id = '$id'";
            $resultado = mysqli_query($conn, $sql);
            $vestido = mysqli_fetch_assoc($resultado);

            $subTotal = $vestido['preco'] * $qtd;

            $sql = "INSERT INTO itensAluguel (preco, vestidoId, aluguelId, qtd)
                        VALUES ('$subTotal', '$id', '$aluguelId', '$qtd')";
            mysqli_query($conn, $sql) or die("Erro: " . mysqli_error($conn));
        }
        
        unset($_SESSION['aluguel']);

        echo "<script>alert('Aluguel registrado com sucesso!');</script>";
        echo "<script>window.location = './Index.php';</script>";
    } else {
        echo "<script>alert('Falha no processamento do aluguel!');</script>";
        echo "<script>window.location = './Carrinho.php';</script>";
    }
} 

?>