<?php
    session_start();
    require_once('../html/footer-comun.html');
    $servername = "50.62.176.63";
    $username = "admincinema";
    $password = "sysadmin";
    $dbname = "cinemas_delicias";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sala=$_SESSION['sala'];
    $horario=$_SESSION['horario'];

    $sql = "SELECT src FROM asientos WHERE sala='$sala' and horario='$horario'";
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
<br>
<center>
    <label style="color: white;font-size: large;">Seleccione los asientos dando clic sobre ellos</label>
</center>
<br>
<div style="">
<div style="padding-left: 18%">

<div>
    <img name="A0" onclick="taquito(this);" src="<?php echo $arr[0]['src']; ?>" width="50" style="float: left; padding-left: .5%">
</div>
<div>
    <img name="A1" onclick="taquito(this);" src="<?php echo $arr[1]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
</div>
<div>
    <img name="A2" onclick="taquito(this);" src="<?php echo $arr[2]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
</div>
<div>
    <img name="A3" onclick="taquito(this);" src="<?php echo $arr[3]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
</div>
<div>
    <img name="A4" onclick="taquito(this);" src="<?php echo $arr[4]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
</div>
<div>
    <img name="A5" onclick="taquito(this);" src="<?php echo $arr[5]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
</div>
    <div>
        <img name="A6" onclick="taquito(this);" src="<?php echo $arr[6]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A7" onclick="taquito(this);" src="<?php echo $arr[7]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A8" onclick="taquito(this);" src="<?php echo $arr[8]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A9" onclick="taquito(this);" src="<?php echo $arr[9]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A10" onclick="taquito(this);" src="<?php echo $arr[10]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A11" onclick="taquito(this);" src="<?php echo $arr[11]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A12" onclick="taquito(this);" src="<?php echo $arr[12]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A13" onclick="taquito(this);" src="<?php echo $arr[13]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A14" onclick="taquito(this);" src="<?php echo $arr[14]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A15"onclick="taquito(this);" src="<?php echo $arr[15]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>


</div>
<br><br><br>



<div style="padding-left: 18%">
    <div>
        <img  name="A16" onclick="taquito(this);" src="<?php echo $arr[16]['src']; ?>" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img  name="A17" onclick="taquito(this);" src="<?php echo $arr[17]['src']; ?>" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A18" onclick="taquito(this);" src="<?php echo $arr[18]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A19" onclick="taquito(this);" src="<?php echo $arr[19]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A20" onclick="taquito(this);" src="<?php echo $arr[20]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A21" onclick="taquito(this);" src="<?php echo $arr[21]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A22" onclick="taquito(this);" src="<?php echo $arr[22]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img  name="A23"onclick="taquito(this);" src="<?php echo $arr[23]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A24" onclick="taquito(this);" src="<?php echo $arr[24]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A25" onclick="taquito(this);" src="<?php echo $arr[25]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A26" onclick="taquito(this);" src="<?php echo $arr[26]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A27" onclick="taquito(this);" src="<?php echo $arr[27]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A28" onclick="taquito(this);" src="<?php echo $arr[28]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A29" onclick="taquito(this);" src="<?php echo $arr[29]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A30" onclick="taquito(this);" src="<?php echo $arr[30]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A31" onclick="taquito(this);" src="<?php echo $arr[31]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>



</div>
    <div style="float: left; padding-left: 2%;" >
        <label style="color: white;font-size: large;">Pel&iacute;cula:&nbsp;&nbsp;</label><label style="color: white;"> <?php $pp=$_SESSION['pelicula']; echo $pp; ?></label><br>
        <label style="color: white;font-size: large;">Horario:&nbsp;&nbsp;</label><label style="color: white;"><?php echo $_SESSION['horario']; ?></label><br>
        <img src="<?php echo $_SESSION['poster']; ?>" alt="Boruto" width="180px" style="float: left;position: absolute ">
    </div>
<br><br><br>

<div style="padding-left: 18%">
    <div>
        <img  name="A32" onclick="taquito(this);" src="<?php echo $arr[32]['src']; ?>" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A33" onclick="taquito(this);" src="<?php echo $arr[33]['src']; ?>" width="50" style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A34" onclick="taquito(this);" src="<?php echo $arr[34]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A35" onclick="taquito(this);" src="<?php echo $arr[35]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A36" onclick="taquito(this);" src="<?php echo $arr[36]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A37" onclick="taquito(this);" src="<?php echo $arr[37]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A38" onclick="taquito(this);" src="<?php echo $arr[38]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A39" onclick="taquito(this);" src="<?php echo $arr[39]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A40" onclick="taquito(this);" src="<?php echo $arr[40]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A41" onclick="taquito(this);" src="<?php echo $arr[41]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A42" onclick="taquito(this);" src="<?php echo $arr[42]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A43" onclick="taquito(this);" src="<?php echo $arr[43]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A44" onclick="taquito(this);" src="<?php echo $arr[44]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A45" onclick="taquito(this);" src="<?php echo $arr[45]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A46" onclick="taquito(this);" src="<?php echo $arr[46]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>
    <div>
        <img name="A47" onclick="taquito(this);" src="<?php echo $arr[47]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
    </div>

</div>

<br><br><br>

    <div style="padding-left: 18%">
        <div>
            <div>
                <img  name="A48" onclick="taquito(this);" src="<?php echo $arr[48]['src']; ?>" width="50" style="float: left; padding-left: .5%">
            </div>
            <img name="A49" onclick="taquito(this);" src="<?php echo $arr[49]['src']; ?>" width="50" style="float: left; padding-left: .5%">
        </div>
        <div>
            <img name="A50" onclick="taquito(this);" src="<?php echo $arr[50]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
        </div>
        <div>
            <img name="A51" onclick="taquito(this);" src="<?php echo $arr[51]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
        </div>
        <div>
            <img name="A52" onclick="taquito(this);" src="<?php echo $arr[52]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
        </div>
        <div>
            <img name="A53" onclick="taquito(this);" src="<?php echo $arr[53]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
        </div>
        <div>
            <img name="A54" onclick="taquito(this);" src="<?php echo $arr[54]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
        </div>
        <div>
            <img name="A55" onclick="taquito(this);" src="<?php echo $arr[55]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
        </div>
        <div>
            <img name="A56" onclick="taquito(this);" src="<?php echo $arr[56]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
        </div>
        <div>
            <img name="A57" onclick="taquito(this);" src="<?php echo $arr[57]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
        </div>
        <div>
            <img name="A58" onclick="taquito(this);" src="<?php echo $arr[58]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
        </div>
        <div>
            <img name="A59" onclick="taquito(this);" src="<?php echo $arr[59]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
        </div>
        <div>
            <img name="A60" onclick="taquito(this);" src="<?php echo $arr[60]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
        </div>
        <div>
            <img name="A61" onclick="taquito(this);" src="<?php echo $arr[61]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
        </div>
        <div>
            <img name="A62" onclick="taquito(this);" src="<?php echo $arr[62]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
        </div>
        <div>
            <img name="A63" onclick="taquito(this);" src="<?php echo $arr[63]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
        </div>

        </div>

<br><br><br>

        <div style="padding-left: 18%">
            <div>
                <div>
                    <img  name="A64" onclick="taquito(this);" src="<?php echo $arr[64]['src']; ?>" width="50" style="float: left; padding-left: .5%">
                </div>
                <img name="A65" onclick="taquito(this);" src="<?php echo $arr[65]['src']; ?>" width="50" style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A66" onclick="taquito(this);" src="<?php echo $arr[66]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A67" onclick="taquito(this);" src="<?php echo $arr[67]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A68" onclick="taquito(this);" src="<?php echo $arr[68]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A69" onclick="taquito(this);" src="<?php echo $arr[69]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A70" onclick="taquito(this);" src="<?php echo $arr[70]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A71" onclick="taquito(this);" src="<?php echo $arr[71]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A72" onclick="taquito(this);" src="<?php echo $arr[72]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A73" onclick="taquito(this);" src="<?php echo $arr[73]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A74" onclick="taquito(this);" src="<?php echo $arr[74]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A75" onclick="taquito(this);" src="<?php echo $arr[75]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A76" onclick="taquito(this);" src="<?php echo $arr[76]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A77" onclick="taquito(this);" src="<?php echo $arr[77]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A78" onclick="taquito(this);" src="<?php echo $arr[78]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A79" onclick="taquito(this);" src="<?php echo $arr[79]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>


</div>

<br><br><br>

        <div style="padding-left: 18%">
            <div>
                <div>
                    <img  name="A80" onclick="taquito(this);" src="<?php echo $arr[80]['src']; ?>" width="50" style="float: left; padding-left: .5%">
                </div>
                <img name="A81" onclick="taquito(this);" src="<?php echo $arr[81]['src']; ?>" width="50" style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A82" onclick="taquito(this);" src="<?php echo $arr[82]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A83" onclick="taquito(this);" src="<?php echo $arr[83]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A84" onclick="taquito(this);" src="<?php echo $arr[84]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A85" onclick="taquito(this);" src="<?php echo $arr[85]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A86" onclick="taquito(this);" src="<?php echo $arr[86]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A87" onclick="taquito(this);" src="<?php echo $arr[87]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A88" onclick="taquito(this);" src="<?php echo $arr[88]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A89" onclick="taquito(this);" src="<?php echo $arr[89]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A90" onclick="taquito(this);" src="<?php echo $arr[90]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A91" onclick="taquito(this);" src="<?php echo $arr[91]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A92" onclick="taquito(this);" src="<?php echo $arr[92]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A93" onclick="taquito(this);" src="<?php echo $arr[93]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A94" onclick="taquito(this);" src="<?php echo $arr[94]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>
            <div>
                <img name="A95" onclick="taquito(this);" src="<?php echo $arr[95]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
            </div>


</div>

<br><br><br>
            <div style="padding-left: 18%">
                <div>
                    <img  name="A96" onclick="taquito(this);" src="<?php echo $arr[96]['src']; ?>" width="50" style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A97" onclick="taquito(this);" src="<?php echo $arr[97]['src']; ?>" width="50" style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A98" onclick="taquito(this);" src="<?php echo $arr[98]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A99" onclick="taquito(this);" src="<?php echo $arr[99]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A100" onclick="taquito(this);" src="<?php echo $arr[100]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A101" onclick="taquito(this);" src="<?php echo $arr[101]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A102" onclick="taquito(this);" src="<?php echo $arr[102]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A103" onclick="taquito(this);" src="<?php echo $arr[103]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A104" onclick="taquito(this);" src="<?php echo $arr[104]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A105" onclick="taquito(this);" src="<?php echo $arr[105]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A106" onclick="taquito(this);" src="<?php echo $arr[106]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A107" onclick="taquito(this);" src="<?php echo $arr[107]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A108" onclick="taquito(this);" src="<?php echo $arr[108]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A109" onclick="taquito(this);" src="<?php echo $arr[109]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A110" onclick="taquito(this);" src="<?php echo $arr[110]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A111" onclick="taquito(this);" src="<?php echo $arr[111]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>

</div>
<br><br><br>

            <div style="padding-left: 18%">
                <div>
                    <img  name="A112" onclick="taquito(this);" src="<?php echo $arr[112]['src']; ?>" width="50" style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A113" onclick="taquito(this);" src="<?php echo $arr[113]['src']; ?>" width="50" style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A114" onclick="taquito(this);" src="<?php echo $arr[114]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A115" onclick="taquito(this);" src="<?php echo $arr[115]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A116" onclick="taquito(this);" src="<?php echo $arr[116]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A117" onclick="taquito(this);" src="<?php echo $arr[117]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A118" onclick="taquito(this);" src="<?php echo $arr[118]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A119" onclick="taquito(this);" src="<?php echo $arr[119]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A120" onclick="taquito(this);" src="<?php echo $arr[120]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A121" onclick="taquito(this);" src="<?php echo $arr[121]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A122" onclick="taquito(this);" src="<?php echo $arr[122]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A123" onclick="taquito(this);" src="<?php echo $arr[123]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A124" onclick="taquito(this);" src="<?php echo $arr[124]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A125" onclick="taquito(this);" src="<?php echo $arr[125]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A126" onclick="taquito(this);" src="<?php echo $arr[126]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>
                <div>
                    <img name="A127" onclick="taquito(this);" src="<?php echo $arr[127]['src']; ?>" width="50"  style="float: left; padding-left: .5%">
                </div>



</div>
</div><br><br><br><br>
<center>
    <form id="realizarCompra" name="realizarCompra" method="POST">
        <button type="submit" id="pagar" name="pagar" class="btn btn-success" onclick="comprar(); return false;" disabled="true"><i class="fa fa-money"></i> Pagar</button>
    </form>
</center>



<script type="text/javascript" src="../js/asientos.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>