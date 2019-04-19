<?php
require 'ValidarSessaoAdmin.php';
require 'Conexao.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT itensAluguel.*, vestido.nome, vestido.imagem
                FROM itensAluguel INNER JOIN vestido
                    ON itensAluguel.vestidoId = vestido.id
                    AND itensAluguel.aluguelId = '$id'";

    $resultado = mysqli_query($conn, $sql);
    if (mysqli_num_rows($resultado) > 0)
    {

    } else {
        header("Location: ListarAlugueis.php");
    }
} else {
    header("Location: ListarAlugueis.php");
}
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

    <script>
        function redirecionar() {
            window.location = "ListarAlugueis.php";
        }
    </script>
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
            <div class="col-xs-12">
                <br />
                <br />
                <br />
                <table class="table table-bordered table-hover table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Imagem</th>
                            <th>Quantidade</th>
                            <th>Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($linha = mysqli_fetch_assoc($resultado)) { ?>
                        <tr>
                            <td align="center">
                                <?php echo $linha['nome']; ?>
                            </td>
                            <td align="center">
                                <img src="Vestidos/<?php echo $linha['imagem']; ?>" class="img-responsive" height="300" width="200" />
                            </td>
                            <td align="center">
                                <?php echo $linha['qtd']; ?>
                            </td>
                            <td align="center">
                                <?php echo number_format($linha['preco'], 2, ',', '.'); ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" align="left">
                                <button class="btn btn-primary btn-lg" onclick="redirecionar()">Voltar</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <br />
                <br />
                <br />
            </div>
        </div>
    </div>

    <script src="./Scripts/jquery-2.1.4.min.js"></script>
    <script src="./Scripts/bootstrap.min.js"></script>
</body>
</html>
