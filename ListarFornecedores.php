<?php
require 'ValidarSessaoAdmin.php';
require 'Conexao.php';
$sql = "SELECT * FROM fornecedor";
$resultado = mysqli_query($conn, $sql);
?>

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
            <div class="col-xs-12">
                <table class="table table-striped table-bordered table-hover table-responsive">
                    <tr>
                        <th>Nome</th>
                        <th>Pais</th>
                        <th>Cidade</th>
                        <th>Bairo</th>
                        <th>Rua</th>
                        <th>N�</th>
                        <th>CEP</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>A��es</th>
                    </tr>
                    <?php while($linha = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                        <td>
                            <?php echo $linha['nome']; ?>
                        </td>
                        <td>
                            <?php echo $linha['pais']; ?>
                        </td>
                        <td>
                            <?php echo $linha['cidade']; ?>
                        </td>
                        <td>
                            <?php echo $linha['bairro']; ?>
                        </td>
                        <td>
                            <?php echo $linha['rua']; ?>
                        </td>
                        <td>
                            <?php echo $linha['numero']; ?>
                        </td>
                        <td>
                            <?php echo $linha['cep']; ?>
                        </td>
                        <td>
                            <?php echo $linha['email']; ?>
                        </td>
                        <td>
                            <?php echo $linha['telefone']; ?>
                        </td>
                        <td>
                            <a href="./TelaAlterarFornecedor.php?id=<?php echo $linha['id']; ?>">Alterar</a>
                            ||
                            <a href="./procDeletarFornecedor.php?id=<?php echo $linha['id']; ?>">Deletar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>

    </div>

    <script src="./Scripts/jquery-2.1.4.min.js"></script>
    <script src="./Scripts/bootstrap.min.js"></script>
</body>
</html>
