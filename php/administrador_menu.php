<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        if(isset($_POST['guardar'])){
            require_once('conexion-adodb.php');
            $nombre=$_POST['nombre'];
            $duracion=$_POST['duracion'];
            $genero=$_POST['genero'];
            $clasificacion=$_POST['clasificacion'];
            $formato=$_POST['formato'];
            $sinopsis=$_POST['sinopsis'];
            $horario=$_POST['horario'];
            $poster=$_POST['poster'];
            $trailer=$_POST['trailer'];
             foreach($_POST as $key=>$value){
                 $swap=$key;
                 $$swap=$value;
                }
            $sql="INSERT INTO peliculas VALUES ('0','$nombre','$duracion','$genero','$clasificacion','$formato','$sinopsis','$horario','$poster','$trailer')";
            $sentencia=$db->Execute($sql);
            if($sentencia==true){
             ?>
              <script type="text/javascript">
                alert("Se registró correctamente");
              </script>
        <?php
            }else{
            ?>
                <script type="text/javascript">
                    window.location="administrador_menu.php"
                    alert("Hubó un error al registrar la película");
                </script>
            <?php
            }
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

    <title>Bootstrap 3, from LayoutIt!</title>

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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo strtoupper($_SESSION['usuario']); ?><strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
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


    <div class="form-group"  style="width: 50%; color: white; margin-left: 5%;" align="center">
        <form id="cambiarCartelera" name="cambiarCartelera" method="POST" >


            <label>Pelìcula:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" style="text-align: center; text-transform: uppercase;" maxlength="30" autofocus="true"  value="" require/>
            <br>

            <label >Duración:</label>
            <input type="text" class="form-control form-inline " id="duracion" name="duracion" style="text-align: center;" maxlength="12" value=""/>
            <br>

            <label>Género:</label>
            <input type="text" class="form-control" id="genero" name="genero" style="text-align: center;" maxlength="50" value=""/>
            <br>

            <label> Clasificación:</label>
            <input type="text" class="form-control" id="clasificacion" name="clasificacion" style="text-align: center;" maxlength="10" value=""/>
            <br>

            <label>Formato:</label>
            <input type="text" class="form-control" id="formato" name="formato" style="text-align: center;" maxlength="10" value=""/>
            <br>

            <label>Sinopsis:</label>
            <textarea class="form-control"  id="sinopsis" name="sinopsis" style="text-align: center;" maxlength="500" rows="10" cols="220">
            </textarea>
            <br>

            <label>Horario:</label>
            <input type="text" class="form-control" id="horario" name="horario" style="text-align: center;" maxlength="10" value=""/>
            <br>
            
            <label>Poster:</label>
            <input type="text" class="form-control" id="poster" name="poster" style="text-align: center;" maxlength="10" value=""/>
            <br>
                
            <label>Video:</label>
            <input type="text" class="form-control" id="trailer" name="trailer" style="text-align: center;" maxlength="10" value=""/>
            <br>

            <button type="submit" id="guardar" name="guardar" class="btn btn-outline btn-success"><i class="fa fa-floppy-o"></i> Guardar</button>

            <br>
            
        </form>
    </div>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>