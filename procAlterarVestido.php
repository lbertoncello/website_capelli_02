<?php
require("Conexao.php");

if ($_POST) {
    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
    }
    if (isset($_POST['tamanho'])) {
        $tamanho = $_POST['tamanho'];
    }
    if (isset($_POST['preco'])) {
        $preco = number_format($_POST['preco'], 2, '.', '');
    }
    if (isset($_POST['cor']))
    {
    	$cor = $_POST['cor'];
    }
    if (isset($_POST['colecao'])) {
        $colecao = $_POST['colecao'];
    }
    if (isset($_POST['data'])) {
        $data = $_POST['data'];

        $newDate = date("Y-m-d", strtotime($data));

        $id = $_POST['id'];
    }
    
    if ($_FILES['imagem']['name']) {

        $caminho = "Vestidos/";
        $imagem_nome = strtolower($_FILES['imagem']['name']);
        $imagem_formato = $_FILES['imagem']['type'];

        $formatos = array("image/jpg", "image/jpeg", "image/png", "image/gif");
        $formatoPermitido = array_search($imagem_formato, $formatos);
        if ($formatoPermitido == null) { 
            echo "<script type='text/javascript'>alert('Formato n�o permitido!'); </script>";
            echo "<script type='text/javascript'>window.history.back();</script>";
        } else {
            if (file_exists("$caminho$imagem_nome")) {
                $i = 1;
                while (file_exists("$caminho[$i]$imagem_nome")) {
                    $i++;
                }
                $imagem_nome = "[$i]$imagem_nome";
            }

            if (!move_uploaded_file($_FILES['imagem']['tmp_name'], "$caminho$imagem_nome")) {
                echo "<script type='text/javascript'>alert('Falha ao enviar a imagem!'); </script>";
                echo "<script type='text/javascript'>window.history.back();</script>";
            } else {
                $sql = "SELECT imagem FROM vestido WHERE id = '$id'";
                $sql_exec = mysqli_query($conn, $sql) or die("Erro!");
                $linha = mysqli_fetch_assoc($sql_exec) or die("Erro!");
                $imagem_nome_rem = $linha['imagem'];
                unlink("$caminho$imagem_nome_rem"); 
                $sql = "UPDATE vestido SET "
                        . "nome = '$nome', idTamanho = '$tamanho', preco = '$preco', imagem = '$imagem_nome', "
                        . "idColecao = '$colecao', dataAquisicao = '$newDate', cor = '$cor' WHERE id = '$id'";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('Vestido alterado com sucesso!');</script>";
                    echo "<script>window.location = './ListarVestidos.php';</script>";
                } else {
                    echo mysqli_error($conn);
                    unlink("$caminho$imagem_nome"); 
                }
            }
        }
    } else { 
        $sql = "UPDATE vestido SET "
                . "nome = '$nome', idTamanho = '$tamanho', preco = '$preco', "
                . "idColecao = '$colecao', dataAquisicao = '$newDate', cor = '$cor' WHERE id = '$id'";
        $sql_exec = mysqli_query($conn, $sql) or die("Erro: " . mysqli_error($conn));
        if ($sql_exec) {
            echo "<script>alert('Vestido alterado com sucesso!');</script>";
            echo "<script>window.location = './ListarVestidos.php';</script>";
        }
    }
} else {
    echo "Formul�rio Inv�lido!";
}
?>