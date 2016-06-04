<?php
    session_start();

    $servername = "50.62.176.63";
    $username = "admincinema";
    $password = "sysadmin";
    $dbname = "cinemas_delicias";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT src FROM asientos WHERE sala='Sala 1'";
    $result = mysqli_query($conn, $sql);
    $i=0;
    $arr=[];
    while($row = mysqli_fetch_assoc($result)) {
       $arr[$i]=$row;
        $i=$i+1;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cinemas Delicias - Oficial Site</title>

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
            <nav class="navbar navbar-default navbar-inverse" style="background-color: dimgray" role="navigation">
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
<br>
<center>
    <label style="color: white;font-size: large;">Seleccione los asientos dando clic sobre ellos</label>
</center>
<br>
<div style="">
<div style="padding-left: 18%">

<div>
    <img  onclick="taquito(this);" src="<?php echo $arr[0]['src']; ?>" width="50" style="float: left; padding-left: .5%">
</div>
<div>
    <img onclick="taquito(this);" src="<?php echo $arr[1]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
</div>
<div>
    <img onclick="taquito(this);" src="<?php echo $arr[2]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
</div>
<div>
    <img onclick="taquito(this);" src="<?php echo $arr[3]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
</div>
<div>
    <img onclick="taquito(this);" src="<?php echo $arr[4]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
</div>
<div>
    <img onclick="taquito(this);" src="<?php echo $arr[5]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
</div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[6]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[7]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[8]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[9]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[10]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[11]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[12]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[13]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[14]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[15]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>


</div>
<br><br><br>



<div style="padding-left: 18%">
    <div>
        <img  onclick="taquito(this);" src="<?php echo $arr[16]['src']; ?>" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[17]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[18]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[19]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[20]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[21]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[22]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[23]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[24]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[25]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[26]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[27]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[28]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[29]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[30]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[31]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>



</div>
    <div style="float: left; padding-left: 2%;" >
        <label style="color: white;font-size: large;">Pel&iacute;cula:&nbsp;&nbsp;</label><label style="color: white;"> <?php echo $_SESSION['pelicula']; ?></label><br>
        <label style="color: white;font-size: large;">Horario:&nbsp;&nbsp;</label><label style="color: white;"><?php echo $_SESSION['horario']; ?></label><br>
        <img src="<?php echo $_SESSION['poster']; ?>" alt="Boruto" width="180px" style="float: left;position: absolute ">
    </div>
<br><br><br>

<div style="padding-left: 18%">
    <div>
        <img  onclick="taquito(this);" src="<?php echo $arr[32]['src']; ?>" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[33]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[34]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[35]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[36]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[37]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[38]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[39]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[40]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[41]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[42]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[43]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[44]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[45]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[46]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img onclick="taquito(this);" src="<?php echo $arr[47]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>


</div>

s<br><br><br>

<div style="padding-left: 18%">
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>


</div>


<br><br><br>

<div style="padding-left: 18%">
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>


</div>

<br><br><br>

<div style="padding-left: 18%">
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
</div>



<br><br><br>

<div style="padding-left: 18%">
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>


</div>
<br><br><br>

<div style="padding-left: 18%">
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left;  padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img src="../img/asientov.png" width="50"  style="float: left; padding-left: .5%">
    </div>


</div>
</div><br><br><br><br>
<center>
    <form id="realizarCompra" name="realizarCompra" method="POST">
        <button type="submit" id="pagar" name="pagar" class="btn btn-success" onclick="verificarContrasena();"><i class="fa fa-money"></i> Pagar</button>
    </form>
</center>

<script type="text/javascript" src="../js/asientos.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>