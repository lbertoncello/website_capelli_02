<?php
require 'ValidarSessaoAdmin.php';
require 'Conexao.php';

$sql = "SELECT vestido.* , tamanho.dimensoes AS tamanhoNome , colecao.nome AS colecaoNome
            FROM vestido INNER JOIN tamanho ON vestido.idTamanho = tamanho.id  
            INNER JOIN colecao ON vestido.idColecao = colecao.id";

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
                        <th>Tamanho</th>
                        <th>Cole�ao</th>
                        <th>Data de Aquisi��o</th>
                        <th>Cor</th>
                        <th>Pre�o</th>
                        <th>Imagem</th>
                        <th>A��es</th>
                    </tr>
                    <?php while($linha = mysqli_fetch_assoc($resultado)) { ?>
                    <tr>
                        <td>
                            <?php echo $linha['nome']; ?>
                        </td>
                        <td>
                            <?php echo $linha['tamanhoNome']; ?>
                        </td>
                        <td>
                            <?php echo $linha['colecaoNome']; ?>
                        </td>
                        <td>
                            <?php echo $Date = date("d/m/Y", strtotime($linha['dataAquisicao'])); ?>
                        </td>
                        <td>
                            <?php echo $linha['cor']; ?>
                        </td>
                        <td>
                            <?php echo number_format($linha['preco'], 2, ',', '.'); ?>
                        </td>
                        <td>
                            <img src="./Vestidos/<?php echo $linha['imagem']; ?>" class="img-responsive" height="300" width="200" />
                        </td>
                        <td>
                            <a href="./TelaAlterarVestido.php?id=<?php echo $linha['id']; ?>">Alterar</a>
                            ||
                            <a href="./procDeletarVestido.php?id=<?php echo $linha['id']; ?>">Deletar</a>
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
