<?php
session_start();
if(isset($_SESSION['usuario'])){

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


<div class="form-group"  style="width: 50%; color: white; margin-left: 5%;" align="center">
    <form id="cambiarCartelera" name="cambiarCartelera">


        <label >Pelìcula:</label>
        <input type="text" class="form-control" id="nom_pelicula" name="nom_pelicula" style="text-align: center; text-transform: uppercase;" maxlength="30" autofocus="true"  />
        <br>

        <label >Duración:</label>
        <input type="text" class="form-control form-inline " id="peli_duracion" name="peli_duracion" style="text-align: center;" maxlength="12" />
        <br>

        <label>Género:</label>
        <input type="text" class="form-control" id="peli_genero" name="peli_genero" style="text-align: center;" maxlength="50" />
        <br>

        <label> Clasificación:</label>
        <input type="text" class="form-control" id="peli_clasificacion" name="peli_clasificacion" style="text-align: center;" maxlength="10" />
        <br>

        <label>Formato:</label>
        <input type="text" class="form-control" id="peli_formato" name="peli_formato" style="text-align: center;" maxlength="10" />
        <br>

        <label>Sinopsis:</label>

            <textarea class="form-control"  id="peli_sinopsis" name="peli_sinopsis" style="text-align: center;" maxlength="500" rows="10" cols="220">

            </textarea>
        <br>




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