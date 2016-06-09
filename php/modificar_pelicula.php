<?php
session_start();
if(isset($_SESSION['usuario'])){
    require_once('conexion-adodb.php');
    if(isset($_POST['buscar'])){


        foreach($_POST as $key=>$value){
            $swap=$key;
            $$swap=$value;
        }
        $gato=$_POST['nom'];
        $sql2 = "select * from peliculas where nombre='$gato'";
        $result2=$db->Execute($sql2);

    }
    if(isset($_POST['guardar'])) {


        $nombre = $_POST['pelicula'];
        $duracion = $_POST['duracion'];
        $genero = $_POST['genero'];
        $clasificacion = $_POST['clasificacion'];
        $formato = $_POST['formato'];
        $sinopsis = $_POST['sinopsis'];
        $trailer = $_POST['trailer'];
        $poser = $_POST['poster'];
        $gato=$_POST['pelicula'];
        foreach ($_POST as $key => $value) {
            $swap = $key;
            $$swap = $value;
        }
        $sql = "update peliculas set nombre='$nombre', duracion='$duracion', genero='$genero', clasificacion='$clasificacion', formato='$formato', sinopsis='$sinopsis', trailer='$trailer', poster='$poser' where nombre='$gato'";
        $result = mysqli_query($conn, $sql);
        if ($result == true) {

        } else {

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
<form method="post">

<select id="nom" name="nom" style="color: black;" onchange="//buscar();" >
    <option value="">Usuarios</option>
    <?php
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT nombre FROM peliculas";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            ?><option value="<?php echo $row["nombre"] ?>"><?php echo $row["nombre"] ?></option> <?php
        }
    } else {
        ?><option value=""><?php echo "No hay usuarios disponibles" ?></option> <?php
    }

    mysqli_close($conn);
    ?>
</select>

    <button type="submit" id="buscar" name="buscar" class="btn btn-success" onclick="//verificarContrasena();"><i class="fa fa-search"></i> Buscar</button>
</form>

<div class="form-group"  style="width: 50%; color: white; margin-left: 5%;" align="center">
    <form id="cambiarCartelera" name="cambiarCartelera" method="post">


        <label >Pelìcula:</label>
        <input type="text" class="form-control" id="pelicula" name="pelicula" style="text-align: center;" maxlength="30" autofocus="true"
               value="<?php
        if(isset($_POST['buscar']))
            echo $result2->fields('nombre'); ?>"
        />
        <br>

        <label >Duración:</label>
        <input type="text" class="form-control form-inline " id="duracion" name="duracion" style="text-align: center;" maxlength="12"
        value="<?php
        if(isset($_POST['buscar']))
            echo $result2->fields('duracion'); ?>"/>
        <br>

        <label>Género:</label>
        <input type="text" class="form-control" id="genero" name="genero" style="text-align: center;" maxlength="50"
               value="<?php
        if(isset($_POST['buscar']))
            echo $result2->fields('genero'); ?>"/>
        <br>

        <label> Clasificación:</label>
        <input type="text" class="form-control" id="clasificacion" name="clasificacion" style="text-align: center;" maxlength="10"
               value="<?php
        if(isset($_POST['buscar']))
            echo $result2->fields('clasificacion'); ?>"/>
        <br>

        <label>Formato:</label>
        <input type="text" class="form-control" id="formato" name="formato" style="text-align: center;" maxlength="10"
               value="<?php
        if(isset($_POST['buscar']))
            echo $result2->fields('formato'); ?>"/>
        <br>

        <label>Sinopsis:</label>

            <textarea class="form-control"  id="sinopsis" name="sinopsis" style="text-align: center;" maxlength="500" rows="10" cols="220"
                      >
                <?php
                if(isset($_POST['buscar']))
                    echo $result2->fields('sinopsis'); ?>

            </textarea>
        <br>
        <label>Trailer:</label>
        <input type="text" class="form-control" id="trailer" name="trailer" style="text-align: center;" maxlength="100"
               value="<?php
               if(isset($_POST['buscar']))
                   echo $result2->fields('trailer'); ?>"/>
        <br>
        <label>Poster:</label>
        <input type="text" class="form-control" id="poster" name="poster" style="text-align: center;" maxlength="100"
               value="<?php
               if(isset($_POST['buscar']))
                   echo $result2->fields('poster'); ?>"/>

        <br>
        <button type="submit" id="guardar" name="guardar" class="btn btn-success" onclick="//verificarContrasena();"><i class="fa fa-floppy-o"></i> Guardar</button>


        <br>



    </form>
    <form action="cerrar_sesion.php">
        <input type="submit" value="Cerrar">
    </form>
</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>