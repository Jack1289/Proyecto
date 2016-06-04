<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        $bandera=0;
        require_once('../html/header-comun.html');
        require_once('../html/footer-comun.html');
        if(isset($_POST['guardar'])){
            require_once('conexion-adodb.php');
            $contrasenaActual=$_POST['contrasenaActual'];
            $contrasena1=$_POST['contrasena1'];
            $contrasena2=$_POST['contrasena2'];
             foreach($_POST as $key=>$value){
                 $swap=$key;
                 $$swap=$value;
                }
            $sql = "UPDATE admin SET contrasena='$contrasena1' WHERE contrasena='$contrasenaActual'";
            $result = mysqli_query($conn, $sql);
            $sql2 = "SELECT contrasena FROM admin WHERE contrasena='$contrasena1'";
            $result2 = mysqli_query($conn, $sql2);
            if ($result == true) {
                if (mysqli_num_rows($result2) > 0) {
                    $bandera = 3;
                    $contrasenaActual='';
                    $contrasena1='';
                    $contrasena2='';
                } else {
                    $bandera = 1;
                    $contrasenaActual='';
                    $contrasena1='';
                    $contrasena2='';
                }
            } else {
                $bandera=1;
                $contrasenaActual='';
                $contrasena1='';
                $contrasena2='';
                ?>
                <?php
                }
            mysqli_close($conn);
        }
    }else{
    ?>
    <script type="text/javascript">
        window.location="iniciar_sesion.php"
    </script>
    <?php
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8_spanish_ci">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cinemas Delicias 3D: Usuario</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet"

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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo strtoupper($_SESSION['usuario']); ?><strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="administrador_menu.php"><i class="fa fa-home"></i> Inicio</a>
                                    </li>
                                    <li>
                                        <a href="registrar_pelicula.php"><i class="fa fa-film"></i> Registrar Pel&iacute;cula</a>
                                    </li>
                                     <li>
                                        <a href="cerrar_sesion.php"><i class="fa fa-sign-out"></i> Cerrar Sesi&oacute;n</a>
                                     </li>
                                </ul>                         
                        </li>            
                    </ul>
                </div>

            </nav>
        </div>
    </div>
</div>


    <center>
	<div  style="width: 10%; color: white; margin-top: 12%;" align="center">
            <form id="cambiarContrasena" name="cambiarContrasena" method="POST">

                <label>Contrase&ntilde;a Actual:</label>
                <input type="password" class="form-control" id="contrasenaAcutal" name="contrasenaActual" style="text-align: center;" maxlength="" autofocus="true"  value="" required/>
                <br>
    
                <label>Contrase&ntilde;a Nueva:</label>
                <input type="password" class="form-control" id="contrasena1" name="contrasena1" style="text-align: center;" maxlength="" value="" required onkeyup="verificarContrasena();"/>
                <br>
    
                <label>Repetir Contrase&ntilde;a Nueva:</label>
                <input type="password" class="form-control" id="contrasena2" name="contrasena2" style="text-align: center;" maxlength="" value="" required onkeyup="verificarContrasena();"/>
                <br>
                <button type="submit" id="guardar" name="guardar" class="btn btn-success" onclick="verificarContrasena();" disabled="true"><i class="fa fa-floppy-o"></i> Guardar</button>
    
                <br>
                <input id="bandera" name="bandera" type="hidden" value="<?php echo $bandera;?>"/>
            </form>
        </div>
    </center>
    
    <script src="https://use.fontawesome.com/fe55c3cf21.js"></script>
<script src="../js/cambiar_contrasena.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>