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
                        <li class="espaco"><a href="<?php echo $campo[1]; ?>" class="nav-button"><?php echo $campo[0]; ?></a></li>
                        <li><a href="./Cadastro.php" class="nav-button">Cadastro</a></li>
                        <li class="hidden-xs"><a href="./Carrinho.php" class="glyphicon glyphicon-shopping-cart"></a></li>
                        <li class="visible-xs"><a href="./Carrinho.php">Carrinho</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid" id="content-login">

            <div class="col-xs-12"></div>

            <div class="row">

                <div class="col-xs-1 col-sm-2 col-md-3 col-lg-4"></div>

                <div class="col-xs-10 col-sm-8 col-md-6 col-lg-4">
                    <h1 class="text-left title">Logar-se</h1>
                    <hr />
                    <form action="./procLoginUsuario.php" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="email" class="form-control" name="email" required="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-lock"></i>
                                </span>
                                <input type="password" class="form-control" name="senha" required="" />
                            </div>
                        </div>
                        <?php
                        if (isset($_GET['local'])) { ?>

                        <input type="hidden" name="local" value="<?php echo $_GET['local']; ?>" />

                        <?php } ?>
                        <button type="submit" class="btn btn-default">Logar</button>
                    </form>
                    <hr />
                    <div>
                        <a href="./LoginAdm.php">
                            <strong>É administrador?</strong>
                        </a>
                        <br />
                        <a href="#">Não consegue acessar sua conta</a>
                        <br />
                        <a href="./Cadastro.php">Não possui uma conta?</a>
                    </div>


                </div>
                <div class="col-xs-1 col-sm-2 col-md-3 col-lg-4"></div>
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
                                    <span>
                                        <i class="glyphicon glyphicon-map-marker"></i>
                                        Rua Leônidas de Esparta, 476
                                    </span>
                                    <span>
                                        <i class="vazio"></i>
                                        Pratinha
                                    </span>
                                    <span>
                                        <i class="vazio"></i>
                                        Cachoeiro do Itapemirim - ES
                                    </span>
                                </address>
                            </div>
                        </div>

                        <div class="col-sm-2 visible-sm"></div>

                        <div class="col-sm-4 col-md-4 col-lg-3">
                            <h3>Contato</h3>
                            <div>
                                <span>
                                    <i class="glyphicon glyphicon-phone"></i>
                                    (28) 3555-1111
                                </span>
                                <span>
                                    <i class="glyphicon glyphicon-envelope"></i>
                                    capelli@gmail.com
                                </span>
                                <span class="visible-sm">
                                    <i></i>
                                </span>
                                <span class="visible-sm">
                                    <i></i>
                                </span>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <h3>Pagamento</h3>
                            <div>
                                <span>
                                    <i class="glyphicon glyphicon-credit-card"></i>
                                    MasterCard
                                </span>
                                <span>
                                    <i class="vazio"></i>
                                    Visa
                                </span>
                                <span>
                                    <i class="vazio"></i>
                                    HiperCard
                                </span>
                                <span>
                                    <i class="glyphicon glyphicon-barcode"></i>
                                    Boleto
                                </span>
                            </div>
                        </div>

                        <div class="col-sm-2 visible-sm"></div>

                        <div class="col-sm-4 hidden-md col-lg-2">
                            <h3>Navegação</h3>
                            <div>
                                <span>
                                    <i class="glyphicon glyphicon-list-alt"></i>
                                    <a href="./Vestidos.php">Vestidos</a>
                                </span>
                                <span>
                                    <i class="glyphicon glyphicon-user"></i>
                                    <a href="./Login.php">Login</a>
                                </span>
                                <span>
                                    <i class="glyphicon glyphicon-pencil"></i>
                                    <a href="./Cadastro.php">Cadastro</a>
                                </span>
                                <span class="visible-sm">
                                    <i></i>
                                </span>
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
