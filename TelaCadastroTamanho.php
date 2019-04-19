<?php
require 'ValidarSessaoAdmin.php';
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
                <center>
                    <h1>Cadastro de Tamanho</h1>
                </center>
                <br />
                <br />

                <form action="./procCadastroTamanho.php" method="post">
                    <div class="form-group">
                        <label for="dimensoes">Dimensões</label>
                        <input type="text" name="dimensoes" class="form-control" maxlength="2" required="" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Cadastrar</button>
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
