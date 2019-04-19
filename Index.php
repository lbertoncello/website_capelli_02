<?php 
session_start();
require 'ValidarSessaoUsuario.php';
require 'Conexao.php';
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
                        <img src="./img/Logo.png" alt="Alternate Text" height="45" width="60" class="hidden-xs hidden-sm"  />
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

        <div class="container-fluid">
            <div class="row visible-xs visible-sm">
                <div class="mobile-title">
                    <h1 class="text-center">Capelli Noivas</h1>
                    <h4 class="text-center">Ajudando a realizar seu sonho</h4>
                </div>
            </div>

            <div class="row">
                <div class="visible-md visible-lg">
                    <div id="slider1_container" style="display: none; position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;">
                            </div>
                        </div>

                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
                            <div>
                                <img u="image" src2="./img/Fotos_slider/slider01.jpg" />
                            </div>
                            <div>
                                <img u="image" src2="./img/Fotos_slider/slider02.jpg" />
                            </div>
                            <div>
                                <img u="image" src2="./img/Fotos_slider/slider03.jpg" />
                            </div>
                            <div>
                                <img u="image" src2="./img/Fotos_slider/slider04.jpg" />
                            </div>
                            <div>
                                <img u="image" src2="./img/Fotos_slider/slider05.jpg" />
                            </div>
                        </div>

                        <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
                            <div u="prototype"></div>
                        </div>
                        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;"></span>
                        <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;"></span>
                        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
                    </div>

                    <script src="./Scripts/jquery-2.1.4.min.js"></script>
                    <script src="./Scripts/bootstrap.min.js"></script>
                    <script src="./Scripts/jssor.slider.mini.js"></script>
                    <script src="./Scripts/Slider.js"></script>
                </div>
            </div>

            <div class="row">
                <div class="azul-escuro"></div>
            </div>

            <div class="row azul">
                <div class="col-xs-3"></div>
                <div class="col-xs-6">
                    <div class="text-center">
                        <h2>
                            Só aqui você encontra as mais renomadas grifes do mundo
                        </h2>
                    </div>
                </div>
                <div class="col-xs-3"></div>
            </div>

            <div class="row">
                <div class="azul-escuro"></div>
            </div>

            <div class="row">
                <div class="col-xs-2"></div>
                <div class="col-xs-8">
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <img src="./img/Produtos_Cappeli/Vestido10/Y21503.jpg" class="img-responsive" />
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <img src="./img/Produtos_Cappeli/Vestido09/Y21509.jpg" class="img-responsive" />
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <img src="./img/Produtos_Cappeli/Vestido08/Y21511.jpg" class="img-responsive" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-2"></div>
            </div>

            <div class="row">
                <div class="azul-escuro"></div>
            </div>

            <div class="row azul">
                <div class="col-xs-3"></div>
                <div class="col-xs-6">
                    <div class="text-center">
                        <h2>
                            Preços arrasadores
                        </h2>
                    </div>
                </div>
                <div class="col-xs-3"></div>
            </div>

            <div class="row">
                <div class="azul-escuro"></div>
            </div>

            <div class="row anuncio">
                <div class="col-xs-5">
                    <img src="./img/Produtos_Cappeli/Vestido01/Y21520.jpg" class="img-responsive" />
                </div>
                <div class="col-xs-1"></div>
                <div class="col-xs-4">
                    <h2>Super promoção!</h2>
                    <h4>De: <big><del>500.000,00</del></big></h4>
                    <h3>Por: <big>150.000,00</big></h3>
                    <hr />
                    <a class="btn btn-default btn-primary btn-block" role="button" href="./Vestidos.html#oferta01">Conferir</a>
                </div>
                <div class="col-xs-2"></div>
            </div>

            <div class="row anuncio">
                <div class="col-xs-2"></div>
                <div class="col-xs-4">
                    <h2>Preço Imperdível!</h2>
                    <h4>De: <big><del>175.000,99</del></big></h4>
                    <h3>Por: <big>175.000,00</big></h3>
                    <hr />
                    <a class="btn btn-default btn-primary btn-block" role="button" href="./Vestidos.html#oferta01">Conferir</a>
                </div>
                <div class="col-xs-1"></div>
                <div class="col-xs-5">
                    <img src="./img/Produtos_Cappeli/Vestido02/Y21519.jpg" class="img-responsive pull-right" />
                </div>
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

</body>
</html>