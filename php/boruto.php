<?php
    session_start();
    $idPelicula=$_SESSION['idPelicula'];
    require_once('conexion-adodb.php');
    $sql="select idPelicula, nombre, duracion, genero, clasificacion, formato, sinopsis, horario, poster, trailer
            from peliculas where idPelicula='$idPelicula'";
    $db->query("SET NAMES 'utf8'");
    $db->query("SET CHARACTER SET utf8");
    $sentencia=$db->Execute($sql);
    $pp=$sentencia->fields('nombre');
    //$_SESSION['idPelicula']=0;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8_spanish_ci">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cinemas Delicias 3D: <?php echo $sentencia->fields('nombre'); ?></title>

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
            <nav class="navbar navbar-default navbar" role="navigation">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="../index.php">Cinemas Delicias</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li>
                            <a href="pelicula.php">Cartelera</a>
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

<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/_gBLh7IrAvU" frameborder="0" allowfullscreen></iframe>-->

<div align="center">

    <br>
    <img src="<?php echo $sentencia->fields('poster');?>" width="400px" style="float: left; padding-left: 5%" >
    <input type="hidden" id="poster" name="poster" value="<?php echo $sentencia->fields('poster');?>">

</div>
<font color="white">
    <label style="padding-left: 5%; font-size: large;">Película:&nbsp;</label><label><?php echo $pp;?></label><br><br>
    <input type="hidden" id="sala" name="sala" value="<?php echo $_SESSION['sala'];?>"
    <input type="hidden" id="xx" name="xx" value="<?php echo $pp;?>">
    <label style="padding-left: 5%; font-size: large;">Duración:&nbsp; </label><label><?php echo $sentencia->fields('duracion');?></label><br><br>
    <label style="padding-left: 5%; font-size: large;">Género:&nbsp; </label><label><?php echo $sentencia->fields('genero');?></label><br><br>
    <label style="padding-left: 5%; font-size: large;">Clasificación:&nbsp; </label><label> <?php echo $sentencia->fields('clasificacion');?></label><br><br>
    <label style="padding-left: 5%; font-size: large;">Formato:&nbsp; </label><label><?php echo $sentencia->fields('formato');?></label><br><br>
    <label style="padding-left: 5%; font-size: large;">Horario&nbsp;&nbsp;</label>
    <select id="horario" name="horario" style="color: black;" onchange="comprar();comprar2();" >
        <option value="">Horarios disponibles</option>
       <?php
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT horario FROM horarios WHERE idPelicula='".$idPelicula."'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                ?><option value="<?php echo $row["horario"] ?>"><?php echo $row["horario"] ?></option> <?php
                }
            } else {
                ?><option value=""><?php echo "No hay horarios disponibles" ?></option> <?php
            }

            mysqli_close($conn);
       ?>
    </select><br><br>
    <label style="padding-left: 5%; font-size: large;">Sinopsis:</label><br><br>
    <label  size="6" style="width: 50%; padding-left: 5%" ><?php echo $sentencia->fields('sinopsis'); ?></label>

</font>

<div align="center" >
    <video width="800" height="533" controls>
        <source src="<?php echo $sentencia->fields('trailer');?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="../js/index.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>