<?php
    $idPelicula=1;
    require_once('conexion-adodb.php');//CONEXION A BASE DE DATOS
    $sql="select idPelicula, nombre, duracion, genero, clasificacion, formato, sinopsis, horario, poster, trailer
            from peliculas where idPelicula=$idPelicula";
    $sentencia=$db->Execute($sql);//db es la coneccion de la base de datos
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>
<body  background="../img/h.jpg">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default navbar-inverse" role="navigation">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="../index.html">Cinemas Delicias</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li>
                            <a href="pelicula.php">CARTELERA</a>
                        </li>

                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-default">
                            Submit
                        </button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">

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





</div>
<font color="white">
<label>Película:&nbsp;</label><label><?php echo $sentencia->fields('nombre');?></label><br>
<label>Duración:&nbsp; </label><label><?php echo $sentencia->fields('duracion');?></label><br>
<label>Género:&nbsp; </label><label><?php echo $sentencia->fields('genero');?></label><br>
    <label>Clasificación:&nbsp; </label><label> <?php echo $sentencia->fields('clasificacion');?></label><br>
    <label>Formato:&nbsp; </label><label><?php echo $sentencia->fields('formato');?></label>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<label style="font-size: large; padding-left: 5%">Horario</label></br>
<select id="horario" name="horario" style="color: black;">
    <option value="">Seleccione una hora</option>
   <?php
        $servername = "50.62.176.63";
        $username = "admincinema";
        $password = "sysadmin";
        $dbname = "cinemas_delicias";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "SELECT horario FROM horarios WHERE idPelicula=1";
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
</select>
<label  size="6" style="width: 50%; padding-left: 5%" ><?php echo $sentencia->fields('sinopsis'); ?></label>
</font>

<div align="center" >



    <video width="800" height="533" controls>
        <source src="<?php echo $sentencia->fields('trailer');?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>



</div>


<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>