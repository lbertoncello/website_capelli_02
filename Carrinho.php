<?php
session_start();
require 'ValidarSessaoUsuario.php';
require 'Conexao.php';
$campo = VerificarCampo();

if (isset($_GET['acao']))
{

    if ($_GET['acao'] == "add")
    {
        if (isset($_GET['id']))
        {
            $vestidoId = $_GET['id'];
            if (isset($_SESSION['aluguel'][$vestidoId]))
            {
                $_SESSION['aluguel'][$vestidoId] = $_SESSION['aluguel'][$vestidoId] + 1;
            } else {
                $_SESSION['aluguel'][$vestidoId] = 1;
            }
        } else {
            echo "<script>alert('É necessário informar um ID!');</script>";
        }
    }

    if ($_GET['acao'] == "del") {
        if(isset($_GET['id']))
        {
            $vestidoId = $_GET['id'];
            if (isset($_SESSION['aluguel'][$vestidoId]))
            {
            	unset($_SESSION['aluguel'][$vestidoId]);
            } else {
                echo "<script>alert('Esse produto não se encontra no carrinho!');</script>";
            }
        } else {
            echo "<script>alert('É necessário informar um ID!');</script>";
        }
    }

    if ($_GET['acao'] == "atl") {
        if(isset($_GET['id']))
        {
            if (isset($_GET['qtd']))
            {
                if (isset($_GET['qtd']) >= 0)
                {
                    $vestidoId = $_GET['id'];
                    if (isset($_SESSION['aluguel'][$vestidoId]))
                    {
                        $qtd = intval($_GET['qtd']);
                        if ($qtd != 0)
                        {
                            $_SESSION['aluguel'][$vestidoId] = $qtd;
                        } else {
                            unset($_SESSION['aluguel'][$vestidoId]);
                        }
                    } else {
                        echo "<script>alert('Esse produto não se encontra no carrinho!');</script>";
                    }
                } else {
                    "<script>alert('Quantidade inválida!');</script>";
                }
            } else {
                "<script>alert('É necessário informar a quantidade!');</script>";
            }
        } else {
            echo "<script>alert('É necessário informar um ID!');</script>";
        }
    }

}

function carrinhoVazio() { ?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<h1>
    <center>Você não possui produtos no carrinho</center>
</h1>
<br />
<center>
    <button type="button" onclick="redirecionar()" class="btn btn-primary btn-lg">Escolher Vestidos</button>
</center>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<?php } ?>

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

    <script>
        function atualizarQtd(id) {
            qtd = document.getElementById("qtd" + id).value;
            window.location = "./Carrinho.php?acao=atl&qtd=" + qtd + "&id=" + id;
        }

        function deletar(id) {
            window.location = "./Carrinho.php?acao=del&id=" + id;
        }

        function redirecionar() {
            window.location = "./Vestidos.php";
        };
    </script>
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


        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <?php
                    if (isset($_SESSION['aluguel']))
                    {
                        if(count(array_keys($_SESSION['aluguel'])) != 0) { ?>
                    <br />
                    <br />
                    <h1><center>Carrinho</center></h1>
                    <br />
                    <br />
                    <table class="table table-responsive table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Imagem</th>
                                <th>Quantidade</th>
                                <th>Ação</th>
                                <th>Preço</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ids = array_keys($_SESSION['aluguel']);
                            $total = 0;
                            for($i = 0; $i < count($ids); $i++) {
                                $id = $ids[$i];
                                $sql = "SELECT * FROM vestido WHERE id = '$id'";
                                $resultado = mysqli_query($conn, $sql);
                                $linha = mysqli_fetch_assoc($resultado);

                                $subtotal = $linha['preco'] * $_SESSION['aluguel'][$linha['id']];

                                $total = $total + $subtotal;

                                $subtotal = number_format($subtotal, 2, ',', '.');
                            ?>
                            <tr>
                                <td align="center">
                                    <?php echo $linha['nome']; ?>
                                </td>
                                <td align="center">
                                    <img src="./Vestidos/<?php echo $linha['imagem']; ?>" height="250" width="150" />
                                </td>
                                <td valign="middle" align="center">
                                    <div class="form-inline">

                                        <input type="number" id="qtd<?php echo $linha['id']; ?>" name="qtd" value="<?php echo $_SESSION['aluguel'][$linha['id']]; ?>" class="form-control" />
                                        <button type="button" class="btn btn-default"
                                            onclick="atualizarQtd(<?php echo $linha['id']; ?>)">
                                            Atualizar
                                        </button>
                                    </div>
                                </td>
                                <td valign="middle" align="center">
                                    <button type="button" class="btn btn-default" onclick="deletar(<?php echo $linha['id']; ?>)">Deletar</button>
                                </td>
                                <td valign="middle" align="center">
                                    <?php echo number_format($linha['preco'], 2, ',', '.'); ?>
                                </td>
                                <td valign="middle" align="center">
                                    <?php echo $subtotal; ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" align="right">
                                    <strong>Total</strong>
                                </td>
                                <td align="left">
                                    <strong>
                                        <?php echo number_format($total, 2, ',', '.'); ?>
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" align="left">
                                    <button type="button" class="btn btn-primary btn-lg" onclick="redirecionar()">Continuar Escolhendo</button>
                                </td>
                                <td colspan="3" align="right">
                                    <form action="./procCarrinho.php" method="post">
                                        <input type="hidden" name="total" value="<?php echo $total; ?>" />
                                        <button type="submit" class="btn btn-success btn-lg">Concluir Aluguel</button>
                                    </form>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <?php
                        } else {
                            carrinhoVazio();
                        }
                    } else {
                        carrinhoVazio();
                    }
                    ?>
                    <br />
                    <br />
                    <br />
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
</body>
</html>
