<?php
require 'ValidarSessaoAdmin.php';
require 'Conexao.php';

$sql = "SELECT * FROM tamanho";
$resultadoTamanho = mysqli_query($conn, $sql);

$sql = "SELECT * FROM colecao";
$resultadoColecao = mysqli_query($conn, $sql);

$id = $_GET['id'];

$sql = "SELECT * FROM vestido WHERE id = '$id'";
$resultadoVestido = mysqli_query($conn, $sql);
$vestido = mysqli_fetch_assoc($resultadoVestido);
?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
    <title>Menu</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
                <h1>Altera��o de Vestido</h1>
                <br />
                <br />
                <form action="./procAlterarVestido.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" required="" maxlength="50" value="<?php echo $vestido['nome']; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="tamanho">Tamanho</label>
                        <select name="tamanho" class="form-control" required>
                            <?php
                            while($linha = mysqli_fetch_assoc($resultadoTamanho))
                            {
                            ?>
                            <option value="<?php echo $linha['id']; ?>" 
                            <?php echo ($linha['id'] == $vestido['idTamanho']) ?  "selected" : ""; ?> >
                            
                            <?php echo $linha['dimensoes']; ?></option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="colecao">Cole��o</label>
                        <select name="colecao" class="form-control" required>
                            <?php
                            while($linha = mysqli_fetch_assoc($resultadoColecao))
                            {
                            ?>
                            <option value="<?php echo $linha['id']; ?>" <?php echo ($linha['id'] == $vestido['idColecao']) ? "selected" : ""; ?> >
                            
                            <?php echo $linha['nome']; ?></option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="data">Data</label>
                        <input type="date" name="data" class="form-control" required value="<?php echo $vestido['dataAquisicao']; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="cor">Cor</label>
                        <input type="text" name="cor" class="form-control" required value="<?php echo $vestido['cor']; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="preco">Pre�o</label>
                        <input type="number" name="preco" class="form-control" step="0.01" value="<?php echo $vestido['preco']; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="imagem">Imagem do Vestido</label>
                        <input type="file" name="imagem"/>
                    </div>
                    <input type="hidden" value="<?php echo $id; ?>" name="id"/>
                    <button type="submit" class="btn btn-default">Alterar</button>
                </form>
            </div>
            <div class="col-xs-4"></div>
        </div>
    </div>

    <script src="./Scripts/jquery-2.1.4.min.js"></script>
    <script src="./Scripts/bootstrap.min.js"></script>
</body>
</html>
