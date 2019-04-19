<?php
require 'Conexao.php';

if ($_POST)
{
	if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
    }
    if(isset($_POST['tamanho'])){
        $tamanho = $_POST['tamanho'];
    }
    if(isset($_POST['colecao'])){
        $colecao = $_POST['colecao'];
    }
    if(isset($_POST['data'])){
        $data = $_POST['data'];

        $newDate = date("Y-m-d", strtotime($data));
    }
    if (isset($_POST['cor']))
    {
    	$cor = $_POST['cor'];
    }
    if(isset($_POST['preco'])){
        $preco = number_format($_POST['preco'], 2, '.', '');
    }

    if (isset($_FILES['imagem'])){

        $caminho = "Vestidos/";                 

        $imagem_nome = strtolower($_FILES['imagem']['name']);

        $imagem_formato = $_FILES['imagem']['type'];                
           
        $formatos = array("image/jpg","image/jpeg","image/png", "image/gif");                
        $formatoPermitido = array_search($imagem_formato,$formatos);                
        if ($formatoPermitido == null){ 
            echo "<script type='text/javascript'>alert('Formato n�o permitido!'); </script>";
            echo "<script type='text/javascript'>window.history.back();</script>";
        }else{

            if (file_exists("$caminho$imagem_nome")){
                $i = 1;
                while (file_exists("$caminho[$i]$imagem_nome")){
                    $i++; 
                }
                $imagem_nome = "[$i]$imagem_nome";
            }

            if (!move_uploaded_file($_FILES['imagem']['tmp_name'], "$caminho$imagem_nome")){
                echo "<script type='text/javascript'>alert('Erro ao enviar a imagem!'); </script>"; 
                echo "<script type='text/javascript'>window.history.back();</script>";
            }else{
                $sql = "INSERT INTO vestido (nome, idTamanho, idColecao, dataAquisicao, preco, imagem, cor)
                    VALUES ('$nome', '$tamanho', '$colecao', '$newDate', '$preco', '$imagem_nome', '$cor')";
                
                if (mysqli_query($conn, $sql)){
                    echo "<script>alert('Vestido cadastrado com sucesso!');</script>";
                    echo "<script>window.location = './TelaCadastroVestido.php';</script>";                        
                }else{
                    echo mysqli_error($conn);
                    unlink("$caminho$imagem_nome"); 
                }
                
            }                    
        }
    }            
} else {
    echo "<script>alert('Formul�rio inv�lido!');</script>";
    echo "<script>window.location = './TelaCadastroVestido.php';</script>";
}

?>