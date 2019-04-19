<?php
session_start();
require 'ValidarSessaoUsuario.php';
$campo = VerificarCampo();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Capelli Noivas</title>

    <link href="./Content/bootstrap.min.css" rel="stylesheet" />
    <link href="./Content/font-awesome.min.css" rel="stylesheet" />
    <link href="./Content/Slider.css" rel="stylesheet" />
    <link href="./Content/Estilos.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
          <script src="Scripts/html5shiv.min.js"></script>
          <script src="Scripts/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./Index.php">
                        <img src="./img/Logo.png" alt="Alternate Text" height="45" width="60" class="hidden-xs hidden-sm" />
                        <h1>Capelli</h1>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./Vestidos.php">Vestidos</a></li>
                        <li><a href="./Pedidos.php">Pedidos</a></li>
                        <li class="espaco"><a href="./<?php echo $campo[1]; ?>" class="nav-button"><?php echo $campo[0]; ?></a></li>
                        <li><a href="./Cadastro.php" class="nav-button">Cadastro</a></li>
                        <li class="hidden-xs"><a href="./Carrinho.php" class="glyphicon glyphicon-shopping-cart"></a></li>
                        <li class="visible-xs"><a href="./Carrinho.php">Carrinho</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid" id="content-cadastro">
            <div class="row">

                <div class="col-xs-1 col-sm-2 col-md-3 col-lg-4"></div>

                <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4">

                    <h1 class="text-left title">Cadastre-se</h1>
                    <hr />

                    <form action="./procCadastroUsuario.php" method="post">


                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input type="text" name="nome" placeholder="Nome" class="form-control" maxlength="50">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="cpf">CPF:</label>
                                    <input type="text" name="cpf" maxlength="11" class="form-control" placeholder="***.***.***-**">
                                </div>
                            </div>
                            
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="cep">CEP </label>
                                    <input type="text" name="cep" maxlength="8" class="form-control">
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
                                        <option value="ap">Amapá</option>
                                        <option value="ba">Bahia</option>
                                        <option value="ce">Ceará</option>
                                        <option value="df">Distrito Federal</option>
                                        <option value="es">Espírito Santo</option>
                                        <option value="go">Goiás</option>
                                        <option value="ma">Maranhão</option>
                                        <option value="mt">Mato Grosso</option>
                                        <option value="ms">Mato Grosso do Sul</option>
                                        <option value="mg">Minas Gerais</option>
                                        <option value="pa">Pará</option>
                                        <option value="pb">Paraíba</option>
                                        <option value="pr">Paraná</option>
                                        <option value="pe">Pernambuco</option>
                                        <option value="pi">Piauí</option>
                                        <option value="rj">Rio de Janeiro</option>
                                        <option value="rn">Rio Grande do Norte</option>
                                        <option value="ro">Rondônia</option>
                                        <option value="rs">Rio Grande do Sul</option>
                                        <option value="rr">Roraima</option>
                                        <option value="sc">Santa Catarina</option>
                                        <option value="se">Sergipe</option>
                                        <option value="sp">São Paulo</option>
                                        <option value="to">Tocantins</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="tel">Telefone</label>
                                    <input type="tel" name="tel" class="form-control" maxlength="13" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="cidade">Cidade </label>
                                    <input type="text" name="cidade" class="form-control" maxlength="50">
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="numero">Bairro: </label>
                                    <input type="text" name="bairro" class="form-control" maxlength="30">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-10">
                                <div class="form-group">
                                    <label for="rua">Rua</label>
                                    <input type="text" name="rua" class="form-control" maxlength="60">
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <div class="form-group">
                                    <label for="numero" class="text-center">Nº</label>
                                    <input type="text" name="numero" size="4" class="form-control" maxlength="5">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail </label>
                            <input type="text" name="email" class="form-control" maxlength="50">
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="senha">Senha </label>
                                    <input type="password" name="senha" class="form-control" maxlength="20">
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="senhaconf">Confirme a senha </label>
                                    <input type="password" name="senhaconf" class="form-control" maxlength="20">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-default">Cadastrar</button>
                        </div>
                    </form>
                    <hr />
                </div>
                <div class="col-xs-1 col-sm-2 col-md-4"></div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <div class="row">
                        <div class="col-sm-6 col-md-5 col-lg-4">
                            <h3>Endereço</h3>
                            <div>
                                <address>
                                    <span><i class="glyphicon glyphicon-map-marker"></i>Rua Leônidas de Esparta, 476</span>
                                    <span><i class="vazio"></i>Pratinha</span>
                                    <span><i class="vazio"></i>Cachoeiro do Itapemirim - ES</span>
                                </address>
                            </div>
                        </div>

                        <div class="col-sm-2 visible-sm"></div>

                        <div class="col-sm-4 col-md-4 col-lg-3">
                            <h3>Contato</h3>
                            <div>
                                <span><i class="glyphicon glyphicon-phone"></i>(28) 3555-1111</span>
                                <span><i class="glyphicon glyphicon-envelope"></i>capelli@gmail.com</span>
                                <span class="visible-sm"><i></i></span>
                                <span class="visible-sm"><i></i></span>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <h3>Pagamento</h3>
                            <div>
                                <span><i class="glyphicon glyphicon-credit-card"></i>MasterCard</span>
                                <span><i class="vazio"></i>Visa</span>
                                <span><i class="vazio"></i>HiperCard</span>
                                <span><i class="glyphicon glyphicon-barcode"></i>Boleto</span>
                            </div>
                        </div>

                        <div class="col-sm-2 visible-sm"></div>

                        <div class="col-sm-4 hidden-md col-lg-2">
                            <h3>Navegação</h3>
                            <div>
                                <span><i class="glyphicon glyphicon-list-alt"></i><a href="./Vestidos.php">Vestidos</a></span>
                                <span><i class="glyphicon glyphicon-user"></i><a href="./Login.php">Login</a></span>
                                <span><i class="glyphicon glyphicon-pencil"></i><a href="./Cadastro.php">Cadastro</a></span>
                                <span class="visible-sm"><i></i></span>
                            </div>
                        </div>
                    </div>
                    <hr />

                    <div class="end-footer">
                        <div class="row">
                            <div class="col-xs-2">
                                <span class="text-left" id="empresa">Capelli</span>
                            </div>
                            <div class="col-xs-5 col-sm-7"></div>
                            <div class="col-xs-5 col-sm-3 text-right">
                                <a href="#">
                                    <span class="fa-stack fa-lg icon-facebook">
                                        <i class="fa fa-square fa-stack-2x"></i>
                                        <i class="fa fa-facebook fa-stack-1x"></i>
                                    </span>
                                </a>

                                <a href="#">
                                    <span class="fa-stack fa-lg icon-instagram">
                                        <i class="fa fa-square fa-stack-2x"></i>
                                        <i class="fa fa-instagram fa-stack-1x"></i>
                                    </span>
                                </a>

                                <a href="#">
                                    <span class="fa-stack fa-lg icon-gplus">
                                        <i class="fa fa-square fa-stack-2x"></i>
                                        <i class="fa fa-google-plus fa-stack-1x"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-1"></div>
            </div>
        </footer>
    </div>

    <script src="./Scripts/jquery-2.1.4.min.js"></script>
    <script src="./Scripts/bootstrap.min.js"></script>
</body>
</html>
