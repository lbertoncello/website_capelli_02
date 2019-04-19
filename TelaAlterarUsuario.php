<?php
require 'Conexao.php';
require 'ValidarSessaoAdmin.php';
$id = $_GET['id'];
$sql = "SELECT * FROM usuario WHERE id = '$id'";
$resultado = mysqli_query($conn, $sql);
$usuario = mysqli_fetch_assoc($resultado);
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

            <div class="col-xs-1 col-sm-2 col-md-3 col-lg-4"></div>

            <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4">

                <h1 class="text-left title">Alterar Usuario</h1>
                <hr />

                <form action="./procAlterarUsuario.php" method="post">


                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <div class="row">
                            <div class="col-xs-12">
                                <input type="text" name="nome" placeholder="Nome" class="form-control" maxlength="50" value="<?php echo $usuario['nome']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="cpf">CPF:</label>
                                <input type="text" name="cpf" maxlength="11" class="form-control" placeholder="***.***.***-**" value="<?php echo $usuario['cpf']; ?>">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="cep">CEP </label>
                                <input type="text" name="cep" maxlength="8" class="form-control" value="<?php echo $usuario['cep']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select name="estado" class="form-control">
                                    <option value="ac">Acre</option>
                                    <option value="al">Alagoas</option>
                                    <option value="am">Amazonas</option>
                                    <option value="ap">Amap�</option>
                                    <option value="ba">Bahia</option>
                                    <option value="ce">Cear�</option>
                                    <option value="df">Distrito Federal</option>
                                    <option value="es">Esp�rito Santo</option>
                                    <option value="go">Goi�s</option>
                                    <option value="ma">Maranh�o</option>
                                    <option value="mt">Mato Grosso</option>
                                    <option value="ms">Mato Grosso do Sul</option>
                                    <option value="mg">Minas Gerais</option>
                                    <option value="pa">Par�</option>
                                    <option value="pb">Para�ba</option>
                                    <option value="pr">Paran�</option>
                                    <option value="pe">Pernambuco</option>
                                    <option value="pi">Piau�</option>
                                    <option value="rj">Rio de Janeiro</option>
                                    <option value="rn">Rio Grande do Norte</option>
                                    <option value="ro">Rond�nia</option>
                                    <option value="rs">Rio Grande do Sul</option>
                                    <option value="rr">Roraima</option>
                                    <option value="sc">Santa Catarina</option>
                                    <option value="se">Sergipe</option>
                                    <option value="sp">S�o Paulo</option>
                                    <option value="to">Tocantins</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="tel">Telefone</label>
                                <input type="tel" name="tel" class="form-control" maxlength="13" value="<?php echo $usuario['telefone']; ?>"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="cidade">Cidade </label>
                                <input type="text" name="cidade" class="form-control" maxlength="50" value="<?php echo $usuario['cidade']; ?>">
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="numero">Bairro: </label>
                                <input type="text" name="bairro" class="form-control" maxlength="30" value="<?php echo $usuario['bairro']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-10">
                            <div class="form-group">
                                <label for="rua">Rua</label>
                                <input type="text" name="rua" class="form-control" maxlength="60" value="<?php echo $usuario['rua']; ?>">
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="form-group">
                                <label for="numero" class="text-center">N�</label>
                                <input type="text" name="numero" size="4" class="form-control" maxlength="5" value="<?php echo $usuario['numero']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail </label>
                        <input type="text" name="email" class="form-control" maxlength="50" value="<?php echo $usuario['email']; ?>">
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="senha">Senha </label>
                                <input type="password" name="senha" class="form-control" maxlength="20" value="<?php echo $usuario['senha']; ?>">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Alterar</button>
                    </div>
                </form>
                <hr />
            </div>
            <div class="col-xs-1 col-sm-2 col-md-4"></div>
        </div>
    </div>

    <script src="./Scripts/jquery-2.1.4.min.js"></script>
    <script src="./Scripts/bootstrap.min.js"></script>
</body>
</html>
