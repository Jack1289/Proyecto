<?php
    session_start();
    $lista=explode(",",$_SESSION['asientos']);
    $sala=$_SESSION['sala'];
echo $_SESSION['asientos'];
    //echo $lista[0];
    //echo $lista[1];
    require_once('../html/footer-comun.html');
    $asientos=$_SESSION['asientos'];
    if(isset($_POST['comprar'])){
        $_SESSION['fecha']=$_POST['fecha'];
        $_SESSION['cuenta']=$_POST['cuenta'];
        $_SESSION['verificacion']=$_POST['verificacion'];
        header ("Location: compra.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cinemas Delicias 3D: Pago</title>

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
<br><br>
<center>

        <label style="font-size: larger; color: white;">Pagar Boleto</label><br><br><br>
        <div style="padding-left: 2%;" >
            <label style="color: white;font-size: large;">Pel&iacute;cula:&nbsp;&nbsp;</label><label style="color: white;"> <?php echo $_SESSION['ds']; ?></label><br>
            <label style="color: white;font-size: large;">Horario:&nbsp;&nbsp;</label><label style="color: white;"><?php echo $_SESSION['horario']; ?></label><br>
            <label style="color: white;font-size: large;">Boletos:&nbsp;&nbsp;</label><label style="color: white;"><?php echo $_SESSION['boletos']; ?></label><br>
            <label style="color: white;font-size: large;">Asientos:&nbsp;&nbsp;</label><label style="color: white;"><?php echo $_SESSION['asientos']; ?></label><br>

        </div><img src="<?php echo $_SESSION['poster']; ?>" alt="Boruto" width="280px" style="float: left; position: absolute; left: 10%; top: 20%; "><br><br>
    <div class="form-group"  style="width: 30%; color: white; margin-left: 5%;" align="center">
        <form id="registrarUsuario" name="registrarUsuario" method="post" >
            <label >N&uacute;mero de tarjeta:</label>
            <input type="text" class="form-control" id="cuenta" name="cuenta" style="text-align: center; text-transform: uppercase;" maxlength="30" autofocus="true"  required value=""/>
            <br>

            <label >Fecha de vencimiento:</label>
            <input type="text" class="form-control form-inline " id="fecha" name="fecha" style="text-align: center;" maxlength="12" required value=""/>
            <br>

            <label>C&oacute;digo de verificaci&oacute;n:</label>
            <input type="text" class="form-control" id="verificacion" name="verificacion" style="text-align: center;" maxlength="50" required value="" />
            <br>

<input type="hidden" id="variable" value="<?php echo $asientos?>">
            <button type="submit" id="comprar" name="comprar" class="btn btn-success" onclick="//pagar();return false;"><i class="fa fa-ticket"></i> Comprar</button>


        </form>
    </div>
</center>
<script type="text/javascript">
</script>
<script src="../js/pago.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>