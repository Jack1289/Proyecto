<?php
session_start();
require_once('conexion-adodb.php');
require_once('../html/header-comun.html');
require_once('../html/footer-comun.html');
if(isset($_SESSION['usuario'])){
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
}else{
    ?>
    <script type="text/javascript" xmlns="http://www.w3.org/1999/html">
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
                                <?php if ($_SESSION['idAutorizacion']=='0'){ ?>
                                    <li>
                                        <a href="registrar_usuario.php"><i class="fa fa-user-plus"></i> Registrar Usuario</a>
                                    </li>
                                    <li>
                                        <a href="modificar_usuario.php"><i class="fa fa-users"></i> Modificar Usuario</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                <?php } ?>
                                <li>
                                    <a href="registrar_pelicula.php"><i class="fa fa-film"></i> Registrar Pel&iacute;cula</a>
                                </li>
                                <li>
                                    <a href="modificar_pelicula.php"><i class="fa fa-pencil"></i> Modificar Pel&iacute;cula</a>
                                </li>
                                <li class="divider">
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
<div class="form-group"  style="width: 100%; color: white;padding-left: 10%;padding-top: 2%;padding-right: 10%; " align="center" >

    <!--<label>Inicio<?php //echo $_SESSION['boletos']; ?></label>-->
    <center>
        <table id="myTable" class="table table-condensed text-center"  align="center" style="color: white;">
            <thead>
            <tr>
                <th class="text-center">ID Compra</th>
                <th class="text-center">Pel&iacute;cula</th>
                <th class="text-center">Horario y Sala</th>
                <th class="text-center">Boletos</th>
                <th class="text-center">C&oacute;digo</th>
                <th class="text-center">Fecha de Compra</th>
            </tr>
            </thead>
            <tbody>
                <?php
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $sql = "SELECT * FROM compra";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        ?><tr><td><?php echo $row["idCompra"] ?></td><td><?php echo $row["pelicula"] ?></td> <td><?php echo $row["horario"] ?></td><td><?php echo $row["boleto"] ?></td><td><?php echo $row["codigo"] ?></td><td><?php echo $row["fechaCompra"] ?></td></tr><?php

                    }
                } else {
                    ?><td value=""><?php echo "No hay horarios disponibles" ?></td> <?php
                }

                mysqli_close($conn);
                ?>

            </tbody>

        </table>

        <button type="submit" id="guardar" name="guardar" class="btn btn-success" onclick="imprimir();"><i class="fa fa-print"></i> Imprimir</button>
</div>

</center>
<script type="text/javascript" >
    $('#myTable').DataTable({
            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "NingÃºn dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Ãšltimo",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },buttons: {
                    copyTitle: 'Copiado al Portapapeles',
                    copySuccess: {
                        _: 'Se han copiado %d Registros'
                    }
                }
            }
        }


    );
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