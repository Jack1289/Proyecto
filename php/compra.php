<?php
session_start();
require_once('../html/header-comun.html');
require_once('../html/footer-comun.html');
    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;

    while ($i <= 7) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cinemas Delicias 3D: Usuario</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <script src="https://use.fontawesome.com/fe55c3cf21.js"></script>

</head>
<body  background="../img/h.jpg">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default" style="" role="navigation">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="../index.php">Cinemas Delicias</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li>
                            <a href="../php/pelicula.php">Cartelera</a>
                        </li>

                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control">
                        </div>


                        <button type="submit" class = "btn btn-default" ><i class="fa fa-search" aria-hidden="true"></i>
                            Buscar
                        </button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="administrador_menu.php">Iniciar Sesi&oacute;n</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
</div>
<div class="form-group"  style="width: 100%; color: white;padding-left: 10%;padding-top: 2%;padding-right: 10%; " align="center" >

    <!--<label>Inicio<?php //echo $_SESSION['boletos']; ?></label>-->
    <center>
        <table id="myTable" class="table table-condensed text-center"  align="center" style="color: white;">
            <thead>
            <tr>
                <th class="text-center">Pel&iacute;cula</th>
                <th class="text-center">Horario y Sala</th>
                <th class="text-center">Boletos</th>
                <th class="text-center">C&oacute;digo</th>
                <th class="text-center"></th>
            </tr>
            </thead>
            <tr>
                <td><?php echo $_SESSION['pelicula'];?></td>
                <td><?php echo $_SESSION['horario'];?></td>
                <td><?php echo $_SESSION['boletos'];?></td>
                <td><?php echo $pass;?></td>
                <td><img width="150px" src="<?php echo $_SESSION['poster'];?>"></td>

            </tr>

        </table>

        <button type="submit" id="guardar" name="guardar" class="btn btn-success" onclick="imprimir();"><i class="fa fa-print"></i> Imprimir</button>
</div>

</center>
<script type="text/javascript" >


    function imprimir(){
        window.print();
    }
</script>
<script src='//cdn.datatables.net/buttons/1.1.2/css/buttons.dataTables.min.css'></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>