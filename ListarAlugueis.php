<?php
require 'ValidarSessaoAdmin.php';
require 'Conexao.php';

?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
    <title>Menu</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="./Content/bootstrap.min.css" rel="stylesheet" />
    <link href="./Content/EstilosAdm.css" rel="stylesheet" />

    <!--[if lt IE 9]>
          <script src="Scripts/html5shiv.min.js"></script>
          <script src="Scripts/respond.min.js"></script>
    <![endif]-->

    <script>
        function redirecionarDetalhes(id) {
            window.location = "./TelaDetalhes.php?id=" + id;
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
                <?php 
                $sql = "SELECT DISTINCT usuario.* 
                        FROM usuario INNER JOIN aluguel
                        WHERE usuario.id = aluguel.idUsuario";
                $resultado = mysqli_query($conn, $sql);
                ?>
                <?php while($usuario = mysqli_fetch_assoc($resultado)) { 
                          $id = $usuario['id'];
                ?>
                <br />
                <br />
                <h2>
                    <center>Usuário: <?php echo " " . $usuario['nome'] . " - ID: " . $usuario['id']; ?> </center>
                </h2>
                <br />
                <br />
                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Identificação do Pedido</th>
                            <th>Data do Aluguel</th>
                            <th>Data da Entrega</th>
                            <th>Valor</th>
                            <th>Informações</th>
                        </tr>
                    </thead>
                    <?php 
                          $sql = "SELECT * FROM aluguel WHERE idUsuario = '$id'";
                          $resultadoAluguel = mysqli_query($conn, $sql);
                    ?>
                    <?php while($linha = mysqli_fetch_assoc($resultadoAluguel)) { ?>
                    <tr>
                        <td align="center">
                            <?php echo $linha['id']; ?>
                        </td>
                        <td align="center">
                            <?php echo $Date = date("d/m/Y", strtotime($linha['dataAluguel'])); ?>
                        </td>
                        <td align="center">
                            <?php echo $Date = date("d/m/Y", strtotime($linha['dataEntrega'])); ?>
                        </td>
                        <td align="center">
                            <?php echo number_format($linha['valor'], 2, ',', '.'); ?>
                        </td>
                        <td align="center">
                            <button type="button" class="btn btn-default"
                                        onclick="redirecionarDetalhes(<?php echo $linha['id']; ?>)">
                                Detalhes
                            </button>
                        </td>
                    </tr>

                    <?php } ?>
                </table>
                <?php } ?>
            </div>
        </div>
    </div>

    <script src="./Scripts/jquery-2.1.4.min.js"></script>
    <script src="./Scripts/bootstrap.min.js"></script>
</body>
</html>
