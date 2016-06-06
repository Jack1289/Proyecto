<?php
session_start();
require_once('conexion-adodb.php');
$user='';
$result2='';

if(isset($_SESSION['usuario'])){
    if(isset($_POST['guardar'])){

        $usuario=$_POST['usuario'];
        $contrasena=$_POST['contrasena'];
        $nombre=$_POST['nombre'];
        $paterno=$_POST['paterno'];
        $materno=$_POST['materno'];

        foreach($_POST as $key=>$value){
            $swap=$key;
            $$swap=$value;
        }
        $sql = "update admin set contrasena='$contrasena', nombre='$nombre', paterno='$paterno', materno='$materno' where usuario='$usuario'";
        $result = mysqli_query($conn, $sql);
        if ($result == true) {

        } else {

        }
        mysqli_close($conn);
    }
    if(isset($_POST['buscar'])){

        $usuarios=$_POST['usuarios'];


        foreach($_POST as $key=>$value){
            $swap=$key;
            $$swap=$value;
        }
        $sql2 = "select * from admin where usuario='$usuarios';";
        $result2=$db->Execute($sql2);
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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo strtoupper($_SESSION['usuario']); ?><strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="administrador_menu.php"><i class="fa fa-home"></i> Inicio</a>
                                </li>
                                <li>
                                    <a href="cambiar_contrasena.php"><i class="fa fa-lock"></i> Cambiar Contrase&ntilde;a</a>
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
<br><br>
<center>

    <div class="form-group"  style="width: 30%; color: white; margin-left: 5%;" align="center">
        <label style="font-size: larger;">Modificar Usuario</label><br><br><br>
        <label style="padding-left: 5%; font-size: large;">Usuarios disponibles:&nbsp;&nbsp;</label>
        <form id="buscarUsuario" name="buscarUsuario" method="post">
        <select id="usuarios" name="usuarios" style="color: black;" onchange="buscar();" >
            <option value="">Usuarios</option>
            <?php
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT usuario FROM admin WHERE idAutorizacion='1';";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    ?><option value="<?php echo $row["usuario"] ?>"><?php echo $row["usuario"] ?></option> <?php
                }
            } else {
                ?><option value=""><?php echo "No hay usuarios disponibles" ?></option> <?php
            }

            mysqli_close($conn);
            ?>
        </select>
            <button type="submit" id="buscar" name="buscar" class="btn btn-success" onclick="//verificarContrasena();"><i class="fa fa-search"></i> Buscar</button>
            <br><br>
        </form>
        <form id="modificarUsuario" name="modificarUsuario" method="post">


            <label >Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" style="text-align: center; text-transform: uppercase;" maxlength="30" autofocus="true" readonly  required value="<?php
            if(isset($_POST['buscar']))
                echo $result2->fields('usuario'); ?>"/>
            <br>

            <label >Contrase&ntilde;a:</label>
            <input type="password" class="form-control form-inline " id="contrasena" name="contrasena" style="text-align: center;" maxlength="12" required value="<?php
            if(isset($_POST['buscar']))
            echo $result2->fields('contrasena'); ?>"/>
            <br>

            <label>Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" style="text-align: center;" maxlength="50" required value="<?php
            if(isset($_POST['buscar']))
            echo $result2->fields('nombre'); ?>"/>
            <br>

            <label> Apelldio Paterno:</label>
            <input type="text" class="form-control" id="paterno" name="paterno" style="text-align: center;" maxlength="10" required value="<?php
            if(isset($_POST['buscar']))
            echo $result2->fields('paterno'); ?>"/>
            <br>

            <label>Apellido Materno:</label>
            <input type="text" class="form-control" id="materno" name="materno" style="text-align: center;" maxlength="10" required value="<?php
            if(isset($_POST['buscar']))
            echo $result2->fields('materno'); ?>"/>
            <br>
            <button type="submit" id="guardar" name="guardar" class="btn btn-success" onclick="//verificarContrasena();"><i class="fa fa-floppy-o"></i> Guardar</button>


        </form>
    </div>
</center>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>