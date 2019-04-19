<?php
require 'Conexao.php';
require 'ValidarSessaoAdmin.php';

$id = $_GET['id'];
$sql = "SELECT * FROM colecao WHERE id = '$id'";
$resultado = mysqli_query($conn, $sql);
$colecao = mysqli_fetch_assoc($resultado);
$sql = "SELECT * FROM fornecedor";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Menu</title>

    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/EstilosAdm.css" rel="stylesheet" />

    <!--[if lt IE 9]>
          <script src="Scripts/html5shiv.min.js"></script>
          <script src="Scripts/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <span class="navbar-brand">CAPELLI</span>
            </div>

            <ul class="nav navbar-nav navbar-right hidden-xs">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Cadastrar
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./TelaCadastroFornecedor.php">Fornecedor</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="./TelaCadastroColecao.php">Coleção</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="./TelaCadastroTamanho.php">Tamanho</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="./TelaCadastroVestido.php">Vestido</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Listar
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./ListarUsuarios.php">Usuarios</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="./ListarFornecedores.php">Fornecedores</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="./ListarTamanhos.php">Tamanhos</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="./ListarVestidos.php">Vestidos</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="./ListarColecoes.php">Coleção</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="./ListarAlugueis.php">Alugueis</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="./SairAdm.php">Sair</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
                <center><h1>Alteração de Coleção</h1></center>
                <br />
                <br />
                <form action="./procAlterarColecao.php" method="post">

                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" required maxlength="50" value="<?php echo $colecao['nome']; ?>" />
                    </div>
                    <div class="form-group">
                        <label name="fornecedor">Fornecedor</label>
                        <select name="fornecedor" required class="form-control">
                            <?php
                            while ($linha = mysqli_fetch_assoc($resultado))
                            {
                            ?>
                            <option value="<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>" />
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Alterar</button>
                    </div>
                </form>
            </div>
            <div class="col-xs-4"></div>
        </div>
    </div>

    <script src="./Scripts/jquery-2.1.4.min.js"></script>
    <script src="./Scripts/bootstrap.min.js"></script>
</body>
</html>